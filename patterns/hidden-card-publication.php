<?php
/**
 * Title: Hidden card publication
 * Slug: beapi-blocks-theme/hidden-card-publication
 * Description: Card publication.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */
?>
<!-- wp:group {"tagName":"article","className":"wp-pattern-hidden-card wp-pattern-hidden-card-publication","layout":{"type":"constrained"}} -->
<article class="wp-block-group wp-pattern-hidden-card wp-pattern-hidden-card-publication">
	<!-- wp:post-featured-image {"aspectRatio":"2/3","width":"220px","height":"290px","align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}}} /-->

	<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)"><!-- wp:post-terms {"term":"category","className":"is-style-tag"} /-->

		<!-- wp:post-title {"textAlign":"center","isLink":true,"className":"is-style-h5"} /-->

		<!-- wp:separator -->
		<hr class="wp-block-separator has-alpha-channel-opacity" />
		<!-- /wp:separator -->
	</div>
	<!-- /wp:group -->
</article>
<!-- /wp:group -->