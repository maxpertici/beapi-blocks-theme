<?php
/**
 * Title: Share
 * Slug: beapi-blocks-theme/share
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

$url           = rawurlencode( get_permalink() );
$article_title = rawurlencode( get_the_title() );

// ----
// mail to message
// ----
$mail_to_message  = rawurlencode( _x( "Hi ! \n\nHere, an interesting article", 'Share an article by mail - Start of the message', 'beapi-blocks-theme' ) );
$mail_to_message .= rawurlencode( "\n\n" ) . $article_title . rawurlencode( "\n\n" );
$mail_to_message .= $url;
$mail_to_message .= rawurlencode( _x( "\n\nEnjoy !", 'Share an article by mail - End of the message', 'beapi-blocks-theme' ) );
$mail_to_title    = rawurlencode( _x( 'Discover an article:', 'Share an article by mail - Title of the mail', 'beapi-blocks-theme' ) );

?>
<!-- wp:group {"className":"wp-pattern-share","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group wp-pattern-share">
	<!-- wp:paragraph {"className":"is-style-label"} -->
	<p class="is-style-label"><?php esc_html_e( 'Share', 'beapi-blocks-theme' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:social-links -->
	<ul class="wp-block-social-links">
		<!-- wp:social-link {"url":"<?php echo esc_url( 'http://www.facebook.com/sharer.php?u=' . $url ); ?>","service":"facebook"} /-->
		<!-- wp:social-link {"url":"<?php echo esc_url( 'https://x.com/intent/tweet?url=' . $url ); ?>","service":"x"} /-->
		<!-- wp:social-link {"url":"<?php echo esc_url( 'https://www.linkedin.com/shareArticle?url=' . $url ); ?>","service":"linkedin"} /-->
	</ul>
	<!-- /wp:social-links -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button is-style-email"><a class="wp-block-button__link wp-element-button" href="mailto:?subject=<?php echo $mail_to_title; // phpcs:ignore ?>&body=<?php echo $mail_to_message; // phpcs:ignore ?>"><?php esc_html_e( 'Send by email', 'beapi-blocks-theme' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button -->
		<div class="wp-block-button is-style-print"><a class="wp-block-button__link wp-element-button" href="javascript:window.print()"><?php esc_html_e( 'Print', 'beapi-blocks-theme' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

