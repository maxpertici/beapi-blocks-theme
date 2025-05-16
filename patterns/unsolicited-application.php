<?php
/**
 * Title: Unsolicited application
 * Slug: beapi-blocks-theme/unsolicited-application
 * Categories: posts
 * Description: A unsolicited application group with a heading and a button.
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>

<!-- wp:group {"metadata":{"name":"Unsolicited application"},"style":{"border":{"radius":"24px"},"spacing":{"blockGap":"var:preset|spacing|md","padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}}},"backgroundColor":"gray-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-gray-50-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"is-style-h3"} -->
<p class="has-text-align-center is-style-h3"><?php esc_html_e( 'Didn\'t find what you were looking for?', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"is-style-h4"} -->
<p class="has-text-align-center is-style-h4"><?php esc_html_e( 'We are always interested in meeting you.', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a href="#" class="wp-block-button__link wp-element-button"><strong><?php esc_html_e( 'Unsolicited application', 'beapi-blocks-theme' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
