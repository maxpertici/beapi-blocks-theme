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
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-filters-home"} /-->

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
