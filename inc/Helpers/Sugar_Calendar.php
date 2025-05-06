<?php

namespace BEA\Theme\Framework\Helpers\Sugar_Calendar;

use function BEA\Theme\Framework\Helpers\Svg\get_the_icon;

/**
 * Get event dates
 *
 * @param int|null $event_id
 * @param string $format
 * @param bool $formatted
 *
 * @return string
 */
function get_event_dates( $event_id = null, $format = '', $formatted = true, $separator = ' - ' ): string {
	if ( ! $event_id ) {
		$event_id = get_the_ID();
	}

	// Get start datetime
	$start_timestamp = get_post_meta( $event_id, 'sc_event_date_time', true );

	// Bail if no event start datetime
	if ( empty( $start_timestamp ) ) {
		return '';
	}

	// Return raw timestamp if not formatting
	if ( empty( $formatted ) ) {
		return $start_timestamp;
	}

	// Get the event object
	$event = sugar_calendar_get_event_by_object( $event_id );

	// Use custom format or get from settings
	$date_format = ! empty( $format ) ? $format : sc_get_date_format();

	// Get ISO date for datetime attribute
	$start_iso = $event->start_date( 'Y-m-d' );

	// Default timezone
	$start_tz = ! empty( $event->start_tz ) ? $event->start_tz : 'floating';

	// Format start date
	$start_date = sugar_calendar_format_date_i18n( $date_format, $start_timestamp );

	// Build start date HTML
	$start_html = sprintf(
		'<span class="event-date event-date--start"><time datetime="%1$s" data-timezone="%2$s">%3$s</time></span>',
		esc_attr( $start_iso ),
		esc_attr( $start_tz ),
		esc_html( $start_date )
	);

	// Get end datetime
	$end_timestamp = get_post_meta( $event_id, 'sc_event_end_date_time', true );

	// Return just start date if no end date
	if ( empty( $end_timestamp ) ) {
		return $start_html;
	}

	// Format end date
	$end_date = sugar_calendar_format_date_i18n( $date_format, $end_timestamp );

	// Return just start date if dates are the same
	if ( $end_date === $start_date ) {
		return $start_html;
	}

	// Default timezone for end date
	$end_tz = 'floating';

	// Set end timezone based on event properties
	if ( ! empty( $event->end_tz ) && ! $event->is_all_day() ) {
		$end_tz = $event->end_tz;
	} elseif ( empty( $event->end_tz ) && ! empty( $event->start_tz ) ) {
		$end_tz = $event->start_tz;
	}

	// Get ISO date for end datetime attribute
	$end_iso = $event->end_date( 'Y-m-d' );

	// Build end date HTML
	$end_html = sprintf(
		'<span class="event-date-sep">%1$s</span><span class="event-date event-date--end"><time datetime="%2$s" data-timezone="%3$s">%4$s</time></span>',
		! empty( $separator ) ? esc_html( $separator ) : '',
		esc_attr( $end_iso ),
		esc_attr( $end_tz ),
		esc_html( $end_date )
	);

	// Combine start and end HTML
	$output = $start_html . $end_html;

	/**
	 * Filter the formatted event date output.
	 *
	 * @since 2.0.0
	 *
	 * @param string $output    Formatted HTML output
	 * @param int    $event_id  Event ID
	 * @param string $format    Date format used
	 */
	return apply_filters( 'sc_get_event_date', $output, $event_id, $format );
}

/**
 * Get event times
 *
 * @return string
 */
function get_event_time(): string {
	if ( ! function_exists( 'sc_get_event_time' ) ) {
		return '';
	}

	$times = sc_get_event_time( get_the_ID() );

	return sprintf(
		'%s - %s',
		$times['start'],
		$times['end']
	);
}

/**
 * Get event location
 *
 * @return mixed
 */
function get_event_location(): mixed {
	if ( ! function_exists( 'sugar_calendar_get_event_by_object' ) ) {
		return '';
	}

	$location = sugar_calendar_get_event_by_object( get_the_ID(), 'post' )->location;

	return esc_html( $location );
}

/**
 * Get event registration URL (URL or text depending on binding key)
 *
 * @param string $key
 *
 * @return string
 */
function get_event_registration_url( $key = 'url' ): string {
	$event = sugar_calendar_get_event_by_object( get_the_ID(), 'post' );

	if ( empty( $event ) ) {
		return '';
	}

	if ( 'url' === $key ) {
		return get_event_meta( $event->id, 'url', true );
	}

	if ( 'text' === $key ) {
		return get_event_meta( $event->id, 'url_text', true ) ? get_event_meta( $event->id, 'url_text', true ) : __( 'Register', 'beapi-blocks-theme' );
	}

	return '';
}

/**
 * Get event calendar links
 *
 * @return void
 */
function get_event_calendar_links(): void {
	if ( ! function_exists( 'Sugar_Calendar\Pro\Features\CalendarFeeds\FrontEnd\Singular\get_feeds' ) ) {
		return;
	}

	$links_wrapper = '';
	$options       = \Sugar_Calendar\Pro\Features\CalendarFeeds\FrontEnd\Singular\get_feeds( get_the_ID() );

	if ( ! empty( $options ) ) {
		$links = [];

		foreach ( $options as $id => $option ) {
			if ( empty( $option['single_cb'] ) || ! is_callable( $option['single_cb'] ) ) {
				continue;
			}

			// Get URL & Name (based on callback).
			$url  = call_user_func( $option['single_cb'], get_the_ID(), 'post' );
			$name = $option['label'];

			// Put together a link.
			$links[] = sprintf(
				'<li class="add-calendar__link add-calendar-%s"><a href="%s" target="_blank">%s%s</a></li>',
				sanitize_key( $id ),
				esc_url( $url ),
				get_the_icon( 'social/icon-' . $id ),
				esc_html( $name )
			);
		}

		$toggle_id = wp_unique_id( 'toggle-' );

		$links_wrapper .= sprintf(
			'<button type="button" class="add-calendar__toggle toggle wp-element-button" aria-controls="%1$s">%2$s</button><ul id="%1$s" class="add-calendar__list toggle-content" aria-hidden="true">%3$s</ul>',
			$toggle_id,
			__( 'Add to my calendar', 'beapi-blocks-theme' ),
			implode( '', $links )
		);
	}

	echo '<div class="add-calendar">' . $links_wrapper . '</div>'; // phpcs:ignore
}
