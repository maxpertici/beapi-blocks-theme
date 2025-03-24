<?php
/**
 * Title: Hero single
 * Slug: beapi-blocks-theme/hero-single-2
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:group {"align":"full","className":"wp-pattern-hero-single wp-pattern-hero-single-2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|3-xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-pattern-hero-single wp-pattern-hero-single-2" style="margin-bottom:var(--wp--preset--spacing--3-xl)">
	<!-- wp:post-featured-image {"align":"full"} /-->

	<!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-white-background-color has-background">
		<!-- wp:paragraph {"className":"is-style-label","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3-xs"}}}} -->
		<p class="is-style-label" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--3-xs)"><?php esc_html_e( 'News', 'beapi-blocks-theme' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xl"}}}} /-->
		<!-- wp:post-terms {"term":"category","className":"is-style-tag","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}}} /-->
		<!-- wp:post-date /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
