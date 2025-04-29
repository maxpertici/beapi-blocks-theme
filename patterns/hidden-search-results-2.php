<?php
/**
 * Title: Search results 2
 * Slug: beapi-blocks-theme/hidden-search-results-2
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-search-title-2"} /-->
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-search-form"} /-->
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-filters-horizontal"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/d0dc46cd982f47fda812ca962bd90e59","id":11} /-->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|3-xl"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
		<div class="wp-block-group alignfull" style="margin-bottom:var(--wp--preset--spacing--xl)">
			<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]},"metadata":{"wpgb":"wpgb-content-block/d0dc46cd982f47fda812ca962bd90e59"}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"layout":{"type":"default"}} -->
					<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-search-card-2"} /-->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group"><!-- wp:wp-grid-builder/facet {"align":"center","grid":"wpgb-content-block/d0dc46cd982f47fda812ca962bd90e59","id":4} /--></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
