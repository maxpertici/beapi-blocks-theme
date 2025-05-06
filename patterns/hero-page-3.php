<?php
/**
 * Title: Hero page 3
 * Slug: beapi-blocks-theme/hero-page-3
 * Categories: hero
 * Description: Hero in one column with full featured image, title, excerpt and buttons.
 * Block Types: core/post-content
 * Post Types: page
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */
?>
<!-- wp:group {"metadata":{"name":"Hero page 3"},"align":"full", "className":"wp-pattern-hero-page wp-pattern-hero-page-3","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|2-xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-pattern-hero-page wp-pattern-hero-page-3" style="margin-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:post-featured-image {"aspectRatio":"16/9","width":"100%","height":"400px","align":"full"} /-->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1,"className":"is-style-h2"} /-->

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
<!-- /wp:group --></div>
<!-- /wp:group -->