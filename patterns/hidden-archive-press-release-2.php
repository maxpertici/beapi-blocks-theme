<?php

/**
 * Title: Hidden archive press release 2
 * Slug: beapi-blocks-theme/hidden-archive-press-release-2
 * Description: Archive press release in a grid.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|md","margin":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|3-xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--2-xl);margin-bottom:var(--wp--preset--spacing--3-xl)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
			<!-- wp:query-title {"type":"archive","showPrefix":false,"align":"wide"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
			<!-- wp:paragraph {"className":"is-style-h5"} -->
			<p class="is-style-h5"><?php esc_html_e( 'Service Press', 'beapi-blocks-theme' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Fermentum dolor, netus vitae pretium mauris. Purus, fames vivamus urna urna, eu turpis commodo</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s","right":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|s"}},"borderColor":"gray-50","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-gray-50-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:paragraph {"className":"is-style-h5"} -->
				<p class="is-style-h5">Lorem ipsum</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><strong><a href="tel:"><?php esc_html_e( 'Tel.: (+33) 1 23 45 67 89', 'beapi-blocks-theme' ); ?></a></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:example@mail.com"><?php esc_html_e( 'Contact by mail', 'beapi-blocks-theme' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|xl"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--xl)">
		<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8","id":7} /-->

		<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8","id":1} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|3-xl"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--3-xl)">
		<!-- wp:wp-grid-builder/facet {"align":"wide","grid":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8","id":6} /-->
		<!-- wp:wp-grid-builder/facet {"align":"wide","grid":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8","id":10} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"beapi-blocks-theme/template-query-press-releases-2"} /-->

	<!-- wp:wp-grid-builder/facet {"align":"center","grid":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8","id":4} /-->
</div>
<!-- /wp:group -->