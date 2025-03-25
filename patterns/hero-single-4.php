<?php
/**
 * Title: Hero single 4
 * Slug: beapi-blocks-theme/hero-single-4
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:group {"tagName":"header","align":"wide","className":"wp-pattern-hero-single wp-pattern-hero-single-4","style":{"spacing":{"margin":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|3-xl"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignwide wp-pattern-hero-single wp-pattern-hero-single-4" style="margin-top:var(--wp--preset--spacing--xl);margin-bottom:var(--wp--preset--spacing--3-xl)">
	<!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:post-terms {"term":"category","className":"is-style-tag","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|2-xs"}}}} /-->
			<!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xl"}}}} /-->
			<!-- wp:post-date {"className":"is-style-label","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xl"}}}} /-->
			<!-- wp:pattern {"slug":"beapi-blocks-theme/share"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:post-featured-image /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</header>
<!-- /wp:group -->