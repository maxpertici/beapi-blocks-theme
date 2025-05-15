<?php

/**
 * Title: Hidden card press release 2
 * Slug: beapi-blocks-theme/hidden-card-press-release-2
 * Description: Card press release.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

$heading_level = ! empty( $args['heading_level'] ) ? $args['heading_level'] : 2;
?>
<!-- wp:group {"tagName":"article","metadata":{"patternName":"beapi-blocks-theme/hidden-card-press-release","name":"Hidden card press release"},"className":"wp-pattern-hidden-card wp-pattern-hidden-card-press-release","style":{"border":{"width":"1px","color":"#cddcdf","radius":"12px"}},"layout":{"type":"constrained"}} -->
<article class="wp-block-group wp-pattern-hidden-card wp-pattern-hidden-card-press-release has-border-color" style="border-color:#cddcdf;border-width:1px;border-radius:12px">
	<!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xs"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%">
			<!-- wp:post-featured-image {"aspectRatio":"3/4","width":"100%","height":"100%","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"100%","style":{"spacing":{"blockGap":"var:preset|spacing|xs","padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s","right":"var:preset|spacing|s"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s);flex-basis:100%"><!-- wp:post-terms {"term":"category","className":"is-style-tag"} /-->

			<!-- wp:post-date {"className":"is-style-label"} /-->

			<!-- wp:post-title {"level":<?php echo esc_attr( $heading_level ); ?>,"isLink":true,"className":"is-style-h5"} /-->

			<!-- wp:post-excerpt {"excerptLength":45,"style":{"spacing":{"margin":{"top":"var:preset|spacing|md"}}}} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</article>
<!-- /wp:group -->
