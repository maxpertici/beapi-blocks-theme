<?php

namespace BEA\Theme\Framework\Services;

use BEA\Theme\Framework\Framework;
use BEA\Theme\Framework\Service;
use BEA\Theme\Framework\Service_Container;
use BEA\Theme\Framework\Tools\Assets as Assets_Tools;

/**
 * The editor service
 */
class Editor implements Service {
	/**
	 * Assets tools
	 *
	 * @var Assets_Tools $assets_tools
	 */
	private $assets_tools;

	/**
	 * Assets
	 *
	 * @var Assets $assets
	 */
	private $assets;

	/**
	 * Register the service
	 *
	 * @param Service_Container $container The service container.
	 */
	public function register( Service_Container $container ): void {
		$this->assets_tools = new Assets_Tools();
		$this->assets       = Framework::get_container()->get_service( 'assets' );
	}

	/**
	 * Get the service name
	 *
	 * @return string The service name.
	 */
	public function get_service_name(): string {
		return 'editor';
	}

	/**
	 * Boot the service
	 *
	 * @param Service_Container $container The service container.
	 */
	public function boot( Service_Container $container ): void {
		$this->after_theme_setup();
		/**
		 * Load editor style css for admin and frontend
		 */
		$this->style();

		/**
		 * Register custom block style
		 */
		$this->register_custom_block_styles();

		/**
		 * Customize theme.json settings
		 */
		add_filter( 'wp_theme_json_data_theme', [ $this, 'filter_theme_json_theme' ], 10, 1 );

		/**
		 * Load editor JS for ADMIN
		 */
		add_action( 'enqueue_block_editor_assets', [ $this, 'admin_editor_script' ] );

		/**
		 * White list of gutenberg blocks
		 */
		add_filter( 'allowed_block_types_all', [ $this, 'gutenberg_blocks_allowed' ], 10, 2 );
	}

	/**
	 * Register :
	 *  - theme_supports
	 *  - color palettes
	 *  - font sizes
	 *  - etc.
	 */
	private function after_theme_setup(): void {}

	/**
	 * Register custom block styles
	 */
	private function register_custom_block_styles() {
		for ( $i = 1; $i <= 6; $i++ ) {
			$style = [
				'name'  => 'h' . (string) $i,
				'label' => sprintf( 'Style H%s', (string) $i ),
			];

			// post-title
			register_block_style(
				'core/post-title',
				$style
			);

			// heading
			register_block_style(
				'core/heading',
				$style
			);

			// paragraph
			register_block_style(
				'core/paragraph',
				$style
			);
		}

		// paragraph
		foreach ( [ 'core/paragraph', 'core/post-date' ] as $block_name ) {
			register_block_style(
				$block_name,
				[
					'name'  => 'label',
					'label' => __( 'Label', 'beapi-frontend-framework' ),
				]
			);
		}

		foreach ( [ 'core/paragraph', 'core/post-excerpt' ] as $block_name ) {
			register_block_style(
				$block_name,
				[
					'name'  => 'small',
					'label' => __( 'Small', 'beapi-frontend-framework' ),
				]
			);

			register_block_style(
				$block_name,
				[
					'name'  => 'large',
					'label' => __( 'Large', 'beapi-frontend-framework' ),
				]
			);

			register_block_style(
				$block_name,
				[
					'name'  => 'huge',
					'label' => __( 'Huge', 'beapi-frontend-framework' ),
				]
			);
		}

		register_block_style(
			'core/post-terms',
			[
				'name'  => 'tag',
				'label' => __( 'Tag', 'beapi-frontend-framework' ),
			]
		);

		register_block_style(
			'core/button',
			[
				'name'  => 'Link',
				'label' => __( 'Link', 'beapi-frontend-framework' ),
			]
		);
	}

	/**
	 * Editor style
	 */
	private function style(): void {
		$file = $this->assets->is_minified() ? $this->assets->get_min_file( 'editor.css' ) : 'editor.css';

		/**
		 * Do not enqueue a inexistant file on admin
		 */
		if ( ! is_file( get_theme_file_path( 'dist/' . $file ) ) ) {
			return;
		}

		add_editor_style( 'dist/' . $file );
	}

	/**
	 * Theme.json settings
	 * See https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/
	 *
	 * @param WP_Theme_JSON_Data $theme_json Class to access and update the underlying data.
	 *
	 * @return WP_Theme_JSON_Data
	 */
	public function filter_theme_json_theme( \WP_Theme_JSON_Data $theme_json ): \WP_Theme_JSON_Data {
		$custom_theme_json = [];

		return $theme_json->update_with( $custom_theme_json );
	}

	/**
	 * Editor script
	 */
	public function admin_editor_script(): void {
		$file     = $this->assets->is_minified() ? $this->assets->get_min_file( 'editor.js' ) : 'editor.js';
		$filepath = 'dist/' . $file;

		if ( ! file_exists( get_theme_file_path( $filepath ) ) ) {
			return;
		}

		$asset_data = $this->assets->get_asset_data( $file );
		$this->assets_tools->register_script(
			'theme-admin-editor-script',
			$filepath,
			$asset_data['dependencies'],
			$asset_data['version'],
			[ 'in_footer' => true ]
		);

		$this->assets_tools->add_inline_script(
			'theme-admin-editor-script',
			'const BFFEditorSettings = ' . wp_json_encode(
				apply_filters(
					'bff_editor_custom_settings',
					[
						'disableAllBlocksStyles'  => [
							'core/separator',
							'core/quote',
							'core/pullquote',
							'core/table',
							'core/image',
						],
						'disabledBlocksStyles'    => [
							// 'core/button' => [ 'outline' ]
						],
						'allowedBlocksVariations' => [
							'core/embed' => [ 'youtube', 'vimeo', 'dailymotion' ],
						],
					]
				)
			),
			'before'
		);

		$this->assets_tools->enqueue_script( 'theme-admin-editor-script' );
	}

	/**
	 * Allow some core Gutenberg blocks
	 *
	 * @param bool|array               $allowed_blocks The allowed blocks.
	 * @param \WP_Block_Editor_Context $block_editor_context The block editor context.
	 *
	 * @return array The allowed blocks.
	 */
	public function gutenberg_blocks_allowed( $allowed_blocks, \WP_Block_Editor_Context $block_editor_context ): array {
		// If boolean, get explicit list of allowed blocks.
		if ( is_bool( $allowed_blocks ) ) {
			$allowed_blocks = $allowed_blocks ? array_keys( \WP_Block_Type_Registry::get_instance()->get_all_registered() ) : [];
		}

		// List of disallowed blocks.
		$disallowed_blocks = [];

		// Remove disallowed blocks from allowed blocks.
		foreach ( $disallowed_blocks as $block ) {
			if ( in_array( $block, $allowed_blocks, true ) ) {
				unset( $allowed_blocks[ array_search( $block, $allowed_blocks, true ) ] );
			}
		}

		return array_values( $allowed_blocks );
	}
}
