<?php

/**
 * Title: Hidden archive press release
 * Slug: beapi-blocks-theme/hidden-archive-press-release-1
 * Description: Archive press release in two columns.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|md","margin":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|3-xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--2-xl);margin-bottom:var(--wp--preset--spacing--3-xl)">
	<!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"align":"wide"} /-->

	<!-- wp:paragraph {"align":"center","className":"is-style-large","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
	<p class="has-text-align-center is-style-large" style="font-style:normal;font-weight:500">Lorem ipsum</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|2-xl"},"blockGap":{"left":"var:preset|spacing|4-xl"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--2-xl)"><!-- wp:column {"width":"27%","style":{"border":{"top":{"color":"var:preset|color|gray-75","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|l"}}}} -->
		<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--gray-75);border-top-width:1px;padding-top:var(--wp--preset--spacing--l);flex-basis:27%">
			<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8","id":7} /-->
			<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8","id":1} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"73%"} -->
		<div class="wp-block-column" style="flex-basis:73%">
			<!-- wp:wp-grid-builder/facet {"align":"wide","grid":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8","id":6} /-->

			<!-- wp:pattern {"slug":"beapi-blocks-theme/template-query-press-releases-1"} /-->

			<!-- wp:wp-grid-builder/facet {"align":"center","grid":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8","id":4} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->