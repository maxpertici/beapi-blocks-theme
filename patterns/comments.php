<?php
/**
 * Title: Comments
 * Slug: beapi-blocks-theme/comments
 * Description: Comments area with comments list, pagination, and comment form.
 * Categories: text
 * Block Types: core/comments
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:group {"tagName":"section","className":"wp-pattern-comments","style":{"spacing":{"margin":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"}}}} -->
<section class="wp-block-group wp-pattern-comments" style="margin-top:var(--wp--preset--spacing--4-xl);margin-bottom:var(--wp--preset--spacing--4-xl)">
	<!-- wp:comments -->
	<div class="wp-block-comments">
		<!-- wp:heading {"className":"sr-only"} -->
		<h2 class="wp-block-heading sr-only"><?php esc_html_e( 'Comments', 'beapi-blocks-theme' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:comments-title {"level":3,"className":"is-style-h4"} /-->
		<!-- wp:comment-template -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:avatar {"size":50} /-->
				<!-- wp:group -->
				<div class="wp-block-group">
					<!-- wp:comment-author-name {"isLink":false,"className":"is-style-h6","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->
					<!-- wp:comment-date {"isLink":false,"style":{"spacing":{"margin":{"top":"0"}}}} /-->
					<!-- wp:comment-content /-->
					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:comment-edit-link /-->
						<!-- wp:comment-reply-link /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:comment-template -->

		<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:comments-pagination-previous /-->
		<!-- wp:comments-pagination-next /-->
		<!-- /wp:comments-pagination -->

		<!-- wp:post-comments-form /-->
	</div>
	<!-- /wp:comments -->
</section>
<!-- /wp:group -->
