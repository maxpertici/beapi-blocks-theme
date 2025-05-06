<?php
/**
 * Title: Hero page Hub
 * Slug: beapi-blocks-theme/hero-page-hub
 * Categories: hero
 * Description: Hero in one column with wide featured image, title, excerpt and buttons.
 * Block Types: core/post-content
 * Post Types: page
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */
?>
<!-- wp:group {"metadata":{"name":"Hero page 4"},"align":"full",className:"wp-pattern-hero-page-hub",style":{"spacing":{"margin":{"bottom":"var:preset|spacing|2-xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-pattern-hero-page-hub" style="margin-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:post-featured-image {"aspectRatio":"16/9","width":"100%","height":"400px","align":"wide"} /-->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|3-xl"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:post-title {"level":1,"className":"is-style-h2"} /-->

<!-- wp:paragraph -->
<p>This is a place for an excerpt. Lorem ipsum dolor sit amet consectetur. At fusce ac netus non nam ut amet. Arcu tempor rhoncus varius purus aliquam nunc.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-link-arrow-right"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-link-arrow-right"><a class="wp-block-button__link wp-element-button">Lorem ipsum</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"className":"is-style-link-arrow-right"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-link-arrow-right"><a class="wp-block-button__link wp-element-button">Lorem ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->