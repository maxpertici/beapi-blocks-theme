<?php
/**
 * Title: Hero page 1
 * Slug: beapi-blocks-theme/hero-page-1
 * Categories: hero
 * Description: Hero in two columns with title, excerpt, buttons and featured image.
 * Block Types: core/post-content
 * Post Types: page
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */
?>
<!-- wp:columns {"metadata":{"name":"Hero page 1","categories":["hero"],"patternName":"beapi-blocks-theme/hero-page-1"},"align":"wide","className":"wp-pattern-hero-page wp-pattern-hero-page-1","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|3-xl"},"margin":{"top":"0","bottom":"var:preset|spacing|2-xl"}}}} -->
<div class="wp-block-columns alignwide wp-pattern-hero-page wp-pattern-hero-page-1" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:column {"verticalAlignment":"center","width":"56%","style":{"spacing":{"blockGap":"var:preset|spacing|xl"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:post-title {"level":1,"className":"is-style-h2"} /-->

<!-- wp:paragraph -->
<p>This is a place for a exerpt. Lorem ipsum dolor sit amet consectetur. At fusce ac netus non nam ut amet. Arcu tempor rhoncus varius purus aliquam nunc.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Lorem ipsum</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Lorem ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"44%"} -->
<div class="wp-block-column" style="flex-basis:44%"><!-- wp:post-featured-image {"aspectRatio":"1"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
