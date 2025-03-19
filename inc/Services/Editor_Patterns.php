<?php
/**
 * Editor Patterns
 *
 * @package    BeAPI Blocks Theme
 * @subpackage BeAPI Blocks Theme
 * @since      BeAPI Blocks Theme 1.0
 */

namespace BEA\Theme\Framework\Services;

use BEA\Theme\Framework\Service;
use BEA\Theme\Framework\Service_Container;

/**
 * The editor patterns service
 */
class Editor_Patterns implements Service {
	/**
	 * Register the service
	 *
	 * @param Service_Container $container The service container.
	 */
	public function register( Service_Container $container ): void {
	}

	/**
	 * Get the service name
	 *
	 * @return string The service name.
	 */
	public function get_service_name(): string {
		return 'editor-patterns';
	}

	/**
	 * Boot the service
	 *
	 * @param Service_Container $container The service container.
	 */
	public function boot( Service_Container $container ): void {
		\add_action( 'init', [ $this, 'register_categories' ], 10 );
	}

	/**
	 * Register the patterns categories
	 */
	public function register_categories(): void {

		/**
		 * usage : 'common' => [ 'label' => __( 'Common', 'beapi-blocks-theme' ) ]
		 */
		$pattern_categories = [
			'common' => [ 'label' => __( 'Common', 'beapi-blocks-theme' ) ],
		];

		foreach ( $pattern_categories as $name => $properties ) {
			if ( \WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				continue;
			}
			register_block_pattern_category( $name, $properties );
		}
	}
}
