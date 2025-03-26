<?php
/**
 * Title: Hero single 3
 * Slug: beapi-blocks-theme/hidden-hero-single-3
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:group {"tagName":"header","align":"wide","className":"wp-pattern-hidden-hero-single wp-pattern-hidden-hero-single-3","style":{"spacing":{"margin":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|2-xl"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignwide wp-pattern-hidden-hero-single wp-pattern-hidden-hero-single-3" style="margin-top:var(--wp--preset--spacing--xl);margin-bottom:var(--wp--preset--spacing--2-xl)">
	<!-- wp:post-terms {"term":"category","className":"is-style-tag","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|2-xs"}}}} /-->
	<!-- wp:post-title {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xl"}}}} /-->

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xl)">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:post-date {"className":"is-style-label"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-share"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:post-featured-image {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}}} /-->
	<!-- wp:post-excerpt {"excerptLength":10000,"className":"is-style-huge"} /-->
</header>
<!-- /wp:group -->
