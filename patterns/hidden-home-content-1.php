<?php
/**
 * Title: Home content 1
 * Slug: beapi-blocks-theme/hidden-home-content-1
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:group {"className":"wp-pattern-hidden-filters","align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"flex-start"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|2-xl"}}}} -->
<div class="wp-block-group wp-pattern-hidden-filters alignwide" style="margin-bottom:var(--wp--preset--spacing--2-xl)">
	<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f","style":0,"id":1} /-->
	<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f","style":0,"id":2} /-->
	<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f","style":0,"id":7} /-->
	<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f","style":0,"id":8} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f","id":6} /-->
</div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":16,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"align":"wide","layout":{"type":"default"},"metadata":{"wpgb":"wpgb-content-block/5a6df3f810f245aabbcc4c60b511647f"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-query alignwide" style="margin-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:post-template {"className":"grid-home-1","align":"full","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"18rem"}} -->
		<?php
		get_template_part(
			'patterns/hidden-card-post-1',
			null,
			[
				'heading_level' => 2,
				'heading_class' => 'is-style-h5',
			]
		);
		?>
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->

<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-pagination"} /-->
