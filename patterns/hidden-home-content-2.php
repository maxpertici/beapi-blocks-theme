<?php
/**
 * Title: Home content 2
 * Slug: beapi-blocks-theme/hidden-home-content-2
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:columns {"className":"wp-pattern-archive-columns","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-columns wp-pattern-archive-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:column {"width":"26.66%"} -->
	<div class="wp-block-column" style="flex-basis:26.66%">
		<!-- wp:group {"className":"wp-pattern-hidden-filters","align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"flex-start"}} -->
		<div class="wp-block-group wp-pattern-hidden-filters alignfull">
			<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f","style":0,"id":1} /-->
			<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f","style":0,"id":2} /-->
			<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f","style":0,"id":7} /-->
			<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f","style":0,"id":8} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"63.33%"} -->
	<div class="wp-block-column" style="flex-basis:63.33%">
		<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|md"}}}} -->
		<div class="wp-block-group alignfull" style="margin-bottom:var(--wp--preset--spacing--md)">
			<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f","id":6} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":"0","postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"align":"wide","layout":{"type":"default"},"metadata":{"wpgb":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xl"}}}} -->
		<div class="wp-block-query alignwide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xl)">
			<!-- wp:post-template {"className":"grid-home-2","align":"full"} -->
				<?php
				get_template_part(
					'patterns/hidden-card-post-1',
					null,
					[
						'card_additional_classes' => 'wp-pattern-hidden-card-post-3',
						'heading_level'           => 2,
						'heading_class'           => 'is-style-h5',
					]
				);
				?>
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->

		<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-pagination"} /-->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
