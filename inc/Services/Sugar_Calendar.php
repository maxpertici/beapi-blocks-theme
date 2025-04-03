<?php

namespace BEA\Theme\Framework\Services;

use BEA\Theme\Framework\Service;
use BEA\Theme\Framework\Service_Container;

class Sugar_Calendar implements Service {
	/**
	 * @param Service_Container $container
	 */
	public function register( Service_Container $container ): void {
		// Remove the default event content hooks.
		remove_filter( 'the_content', 'sc_event_content_hooks' );

		// Register custom block bindings.
		add_action( 'init', [ $this, 'register_custom_block_bindings' ] );
	}

	/**
	 * @param Service_Container $container
	 */
	public function boot( Service_Container $container ): void {}

	/**
	 * @return string
	 */
	public function get_service_name(): string {
		return 'sugar-calendar';
	}

	/**
	 * Register custom block bindings source for events, used in the editor
	 */
	public function register_custom_block_bindings(): void {
		register_block_bindings_source(
			'sugar-calendar/event-date',
			[
				'label'              => __( 'Event Date', 'beapi-blocks-theme' ),
				'get_value_callback' => [ $this, 'get_event_dates_binding' ],
			]
		);

		register_block_bindings_source(
			'sugar-calendar/event-time',
			[
				'label'              => __( 'Event time', 'beapi-blocks-theme' ),
				'get_value_callback' => [ $this, 'get_event_time' ],
			]
		);

		register_block_bindings_source(
			'sugar-calendar/event-location',
			[
				'label'              => __( 'Event Location', 'beapi-blocks-theme' ),
				'get_value_callback' => [ $this, 'get_event_location' ],
			]
		);

		register_block_bindings_source(
			'sugar-calendar/event-registration-url',
			[
				'label'              => __( 'Event Registration URL', 'beapi-blocks-theme' ),
				'get_value_callback' => [ $this, 'get_event_registration_url' ],
			]
		);
	}

	/**
	 * Get event dates
	 *
	 * @return string
	 */
	public function get_event_dates_binding(): string {
		return \BEA\Theme\Framework\Helpers\Sugar_Calendar\get_event_dates();
	}

	/**
	 * Get event times
	 *
	 * @return string
	 */
	public function get_event_time(): string {
		return \BEA\Theme\Framework\Helpers\Sugar_Calendar\get_event_time();
	}

	/**
	 * Get event location
	 *
	 * @return string
	 */
	public function get_event_location(): string {
		return \BEA\Theme\Framework\Helpers\Sugar_Calendar\get_event_location();
	}

	/**
	 * Get event registration URL (URL or text depending on binding key)
	 *
	 * @return string
	 */
	public function get_event_registration_url( array $source_args ): string {
		if ( ! isset( $source_args['key'] ) ) {
			return '';
		}

		return \BEA\Theme\Framework\Helpers\Sugar_Calendar\get_event_registration_url( $source_args['key'] );
	}
}
