<?php
/**
 * Title: Hero single 2
 * Slug: beapi-blocks-theme/hidden-hero-single-2
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:group {"tagName":"header","align":"full","className":"wp-pattern-hidden-hero-single wp-pattern-hidden-hero-single-2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|3-xl"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull wp-pattern-hidden-hero-single wp-pattern-hidden-hero-single-2" style="margin-bottom:var(--wp--preset--spacing--3-xl)">
	<!-- wp:post-featured-image {"align":"full"} /-->

	<!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-white-background-color has-background">
		<!-- wp:paragraph {"className":"is-style-label","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3-xs"}}}} -->
		<p class="is-style-label" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--3-xs)"><?php esc_html_e( 'News', 'beapi-blocks-theme' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xl"}}}} /-->
		<!-- wp:post-terms {"term":"category","className":"is-style-tag","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}}} /-->
		<!-- wp:post-date {"className":"is-style-label"} /-->
	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
