<?php
/**
 * Title: Hero single
 * Slug: beapi-blocks-theme/hero-single-1
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:group {"className":"wp-pattern-hero-single wp-pattern-hero-single-1","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|3-xl"}}}} -->
<div class="wp-block-group wp-pattern-hero-single wp-pattern-hero-single-1" style="margin-bottom:var(--wp--preset--spacing--3-xl)">
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--s)">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-date /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:post-terms {"term":"category","className":"is-style-tag"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xl"}}}} /-->
	<!-- wp:post-excerpt {"excerptLength":10000,"className":"is-style-huge","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"bottom":"var:preset|spacing|xl"}}}} /-->
	<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}}} /-->
	<!-- wp:pattern {"slug":"beapi-blocks-theme/share"} /-->
</div>
<!-- /wp:group -->
