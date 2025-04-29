<?php

/**
 * Title: Hidden filters horizontal
 * Slug: beapi-blocks-theme/hidden-filters-horizontal
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:group {"className":"wp-pattern-hidden-filters-horizontal","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-pattern-hidden-filters-horizontal">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"is-style-label"} -->
		<p class="is-style-label"><?php echo esc_html__( 'Filter by', 'beapi-blocks-theme' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/d0dc46cd982f47fda812ca962bd90e59","id":8} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/d0dc46cd982f47fda812ca962bd90e59","id":9} /-->

		<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/d0dc46cd982f47fda812ca962bd90e59","id":1} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->