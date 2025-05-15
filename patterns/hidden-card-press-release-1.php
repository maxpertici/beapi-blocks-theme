<?php

/**
 * Title: Hidden card press release
 * Slug: beapi-blocks-theme/hidden-card-press-release-1
 * Description: Card press release.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

$heading_level = ! empty( $args['heading_level'] ) ? $args['heading_level'] : 2;
?>
<!-- wp:group {"tagName":"article","metadata":{"patternName":"beapi-blocks-theme/hidden-card-press-release-1","name":"Hidden card press release"},"className":"wp-pattern-hidden-card wp-pattern-hidden-card-press-release","style":{"border":{"bottom":{"color":"var:preset|color|gray-100","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|md"},"blockGap":"var:preset|spacing|2-xs"}},"layout":{"type":"constrained"}} -->
<article class="wp-block-group wp-pattern-hidden-card wp-pattern-hidden-card-press-release" style="border-bottom-color:var(--wp--preset--color--gray-100);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--md)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:post-terms {"term":"category","className":"is-style-tag"} /-->
		<!-- wp:post-date {"className":"is-style-label"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-title {"level":<?php echo esc_attr( $heading_level ); ?>,"isLink":true,"className":"is-style-h5"} /-->
</article>
<!-- /wp:group -->
