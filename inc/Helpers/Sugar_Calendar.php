<?php

namespace BEA\Theme\Framework\Helpers\Sugar_Calendar;

use function BEA\Theme\Framework\Helpers\Svg\get_the_icon;

/**
 * Get event dates
 *
 * @return string
 */
function get_event_dates(): string {
	if ( ! function_exists( 'sc_get_event_date' ) ) {
		return '';
	}

	return sc_get_event_date( get_the_ID() );
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
