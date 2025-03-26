<?php
/**
 * Title: More posts
 * Slug: beapi-blocks-theme/more-posts
 * Description: Displays a list of posts with title and date.
 * Categories: query
 * Block Types: core/query
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:group {"className":"wp-pattern-more-posts","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-pattern-more-posts alignwide" style="padding-top:var(--wp--preset--spacing--4-xl);padding-bottom:var(--wp--preset--spacing--4-xl)">
	<!-- wp:columns {"align":"full","verticalAlignment":"bottom","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|l"}}}} -->
	<div class="wp-block-columns alignfull are-vertically-aligned-bottom" style="margin-bottom:var(--wp--preset--spacing--l)">
		<!-- wp:column {"verticalAlignment":"bottom","width":"66.66%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%">
			<!-- wp:heading {"className":"is-style-h3","align":"full"} -->
			<h2 class="wp-block-heading alignfull is-style-h3"><?php esc_html_e( 'Other poetry that may interest you', 'beapi-blocks-theme' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%">
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button is-style-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>"><?php esc_html_e( 'See more posts', 'beapi-blocks-theme' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
	<div class="wp-block-query alignfull">
		<!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-card-post-1"} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
