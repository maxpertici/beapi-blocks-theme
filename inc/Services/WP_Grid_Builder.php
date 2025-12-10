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
	 * @var Assets_Tools
	 */
	private $assets;

	/**
	 * Register the service.
	 *
	 * @param Service_Container $container The service container.
	 */
	public function register( Service_Container $container ): void {
		$this->assets = \BEA\Theme\Framework\Framework::get_container()->get_service( 'assets' );
	}

	/**
	 * Boot the service.
	 *
	 * @param Service_Container $container The service container.
	 */
	public function boot( Service_Container $container ): void {
		add_filter( 'wp_grid_builder/frontend/register_scripts', [ $this, 'wpgb_register_scripts' ], 10, 1 );
		add_filter( 'wp_grid_builder/frontend/register_styles', [ $this, 'wpgb_register_styles' ], 10, 1 );
		add_filter( 'wp_grid_builder/facet/title_tag', [ $this, 'facet_title_tag' ], 10, 1 );
	}

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

		$asset = $this->assets->get_asset_file( 'wpgb', 'js' );

		if ( ! $asset ) {
			return $scripts;
		}

		$scripts[] = [
			'handle'  => 'wpgb-theme-script',
			'source'  => \get_theme_file_uri( $asset['file'] ),
			'version' => $asset['version'],
		];

		return $scripts;
	}

		/**
	 * Register scripts
	 *
	 * @param array $scripts The scripts.
	 * @see https://docs.wpgridbuilder.com/resources/js-events/#events-in-external-script
	 *
	 * @return array
	 */
	public function wpgb_register_styles( $styles ): array {
		// return if is gutenberg editor.
		if ( \defined( 'REST_REQUEST' ) && REST_REQUEST ) {
			return $styles;
		}

		$asset = $this->assets->get_asset_file( 'wpgb', 'css' );

		if ( ! $asset ) {
			return $styles;
		}

		$styles[] = [
			'handle'  => 'wpgb-theme-style',
			'source'  => \get_theme_file_uri( $asset['file'] ),
			'version' => $asset['version'],
		];

		return $styles;
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
