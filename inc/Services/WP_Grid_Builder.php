<?php

namespace BEA\Theme\Framework\Services;

use BEA\Theme\Framework\Service;
use BEA\Theme\Framework\Service_Container;
use WP_Grid_Builder\Includes\Database;
use WP_Grid_Builder\Includes\Helpers;

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

		add_action(
			'init',
			function () {
				if ( did_action( 'wp_grid_builder/init' ) ) {
					$this->load_wpgb_configuration();
				} else {
					add_action( 'wp_grid_builder/init', [ $this, 'load_wpgb_configuration' ] );
				}
			}
		);
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

	/**
	 * Load WP Grid Builder configuration files.
	 *
	 * Load exported configuration files from the folder `assets/wpgb` if they have changed.
	 * Supported configuration files are :
	 * - `facets.json`
	 * - `grids.json`
	 * - `cards.json`
	 * - `styles.json`
	 *
	 * @return void
	 */
	public function load_wpgb_configuration(): void {
		if ( ! defined( 'WPGB_VERSION' ) ) {
			return;
		}

		$wpgb_types = [
			'facets',
			'grids',
			'cards',
			'styles',
		];

		$wpgb_database = new Database();
		foreach ( $wpgb_types as $wpgb_type ) {
			$config_filepath = get_theme_file_path( sprintf( '/assets/wpgb/%s.json', $wpgb_type ) );
			if ( ! is_readable( $config_filepath ) ) {
				continue;
			}

			// Check is file has changed.
			$option_name  = sprintf( 'wpgb_%s_hash', $wpgb_type );
			$file_hash    = md5_file( $config_filepath );
			$current_hash = get_option( $option_name, '' );
			if ( hash_equals( $file_hash, $current_hash ) ) {
				continue;
			}

			$content = file_get_contents( $config_filepath ); //phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
			if ( empty( $content ) ) {
				continue;
			}

			// Decode data (use WPGB helper to decode inner fields properly).
			try {
				$wpgb_data = json_decode( $content, true, 512, JSON_THROW_ON_ERROR );
				$wpgb_data = Helpers::maybe_json_decode( $wpgb_data, true );
			} catch ( \JsonException $e ) {
				continue;
			}

			// Delete existing data before reimport.
			$existing_data = $wpgb_database::query_results(
				[
					'select' => 'id',
					'from'   => $wpgb_type,
				]
			);
			if ( is_array( $existing_data ) && ! empty( $existing_data ) ) {
				$wpgb_database::delete_row( $wpgb_type, wp_list_pluck( $existing_data, 'id' ) );
			}

			// Prepare request body.
			$request_body = wp_json_encode(
				[
					'content' => $wpgb_data,
				]
			);

			// Import data via REST endpoint
			$request = new \WP_REST_Request( 'POST', '/wpgb/v2/import' );
			$request->set_header( 'Content-Type', 'application/json' );
			$request->set_body( $request_body );

			$response = rest_do_request( $request );

			// Update the stored hash if the request was successful.
			if ( ! $response->is_error() ) {
				update_option( $option_name, $file_hash );
			}
		}
	}
}
