<?php

/**
 * Title: Search results 1
 * Slug: beapi-blocks-theme/hidden-search-results-1
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-search-form"} /-->
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-search-title-1"} /-->

<!-- wp:columns {"align":"wide","className":"wp-pattern-archive-columns","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|3-xl"}}}} -->
<div class="wp-block-columns wp-pattern-archive-columns alignwide"><!-- wp:column {"width":"26.66%"} -->
	<div class="wp-block-column" style="flex-basis:26.66%">
		<!-- wp:group {"className":"wp-pattern-hidden-filters","layout":{"type":"constrained"}} -->
		<div class="wp-block-group wp-pattern-hidden-filters"><!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/3e43cf251adf4a8a8440918a5486f6c7","id":8} /-->
			<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/3e43cf251adf4a8a8440918a5486f6c7","id":10} /-->

			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/3e43cf251adf4a8a8440918a5486f6c7","id":1} /-->

			<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/3e43cf251adf4a8a8440918a5486f6c7","id":9} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"63.33%"} -->
	<div class="wp-block-column" style="flex-basis:63.33%">
		<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/3e43cf251adf4a8a8440918a5486f6c7","id":6} /-->

		<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|3-xl"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
			<div class="wp-block-group alignfull" style="margin-bottom:var(--wp--preset--spacing--xl)">
				<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
					<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-search-card-1"} /-->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:group -->

			<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/3e43cf251adf4a8a8440918a5486f6c7","id":4} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->