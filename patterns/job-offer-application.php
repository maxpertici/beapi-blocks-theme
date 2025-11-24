<?php
/**
 * Title: Job offer application
 * Slug: beapi-blocks-theme/job-offer-application
 * Description: Displays a job offer application button.
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>

<!-- wp:group {"metadata":{"name":"Job offer application"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|2-xl"},"padding":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|2-xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--2-xl);padding-top:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:paragraph {"align":"center","className":"is-style-h3"} -->
<p class="has-text-align-center is-style-h3"><?php esc_html_e( 'Are you interested in this job offer?', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'We look forward to receiving your application. All applications will be treated confidentially.', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Send my application', 'beapi-blocks-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
