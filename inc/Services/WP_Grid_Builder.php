<?php

namespace BEA\Theme\Framework\Services;

use BEA\Theme\Framework\Service;
use BEA\Theme\Framework\Service_Container;

/**
 * WP Grid Builder service.
 *
 * @package BEA\Theme\Framework\Services
 */
class WP_Grid_Builder implements Service {

	/**
	 * Register the service.
	 *
	 * @param Service_Container $container The service container.
	 */
	public function register( Service_Container $container ): void {
		add_filter( 'wp_grid_builder/frontend/register_scripts', [ $this, 'wpgb_register_scripts' ], 10, 1 );
		add_filter( 'wp_grid_builder/facet/title_tag', [ $this, 'facet_title_tag' ], 10, 1 );
	}

	/**
	 * Boot the service.
	 *
	 * @param Service_Container $container The service container.
	 */
	public function boot( Service_Container $container ): void {}

	/**
	 * Get the service name.
	 *
	 * @return string
	 */
	public function get_service_name(): string {
		return 'wp-grid-builder';
	}

	/**
	 * Register scripts
	 *
	 * @param array $scripts The scripts.
	 * @see https://docs.wpgridbuilder.com/resources/js-events/#events-in-external-script
	 *
	 * @return array
	 */
	public function wpgb_register_scripts( $scripts ): array {
		// return if is gutenberg editor.
		if ( \defined( 'REST_REQUEST' ) && REST_REQUEST ) {
			return $scripts;
		}

		if ( file_exists( \get_theme_file_path( '/dist/wpgb-min.js' ) ) ) {
			$file = \get_theme_file_uri( '/dist/wpgb-min.js' );
		} else {
			$file = \get_theme_file_uri( '/dist/wpgb.js' );
		}

		if ( ! $file ) {
			return $scripts;
		}

		$theme = \wp_get_theme();

		$scripts[] = [
			'handle'  => 'wpgb-theme-script',
			'source'  => $file,
			'version' => $theme->get( 'Version' ),
		];

		return $scripts;
	}

	/**
	 * Change facet's title tag
	 *
	 * @param string $title_tag The title tag.
	 * @return string
	 */
	public function facet_title_tag( $title_tag ): string {
		return 'p';
	}
}
