<?php

/**
 * Title: 404
 * Slug: beapi-blocks-theme/hidden-404
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"110px","bottom":"80px","left":"var:preset|spacing|3-xl","right":"var:preset|spacing|3-xl"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="padding-top:110px;padding-right:var(--wp--preset--spacing--3-xl);padding-bottom:80px;padding-left:var(--wp--preset--spacing--3-xl)">
	<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-right:0;padding-left:0">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xl"}}}} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"bottom"} -->
			<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xl"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:heading {"level":1} -->
						<h1 class="wp-block-heading"><?php esc_html_e( 'Oops...', 'beapi-blocks-theme' ); ?></h1>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"className":"is-style-large"} -->
						<p class="is-style-large"><?php esc_html_e( 'The page you are looking for does not exist', 'beapi-blocks-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><?php esc_html_e( 'Error code : 404', 'beapi-blocks-theme' ); ?><br><?php esc_html_e( 'Here are some useful links instead :', 'beapi-blocks-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-icon"} -->
							<div class="wp-block-button is-style-icon"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Back to home', 'beapi-blocks-theme' ); ?></a></div>
							<!-- /wp:button -->

							<!-- wp:button {"className":"is-style-icon"} -->
							<div class="wp-block-button is-style-icon"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Link', 'beapi-blocks-theme' ); ?></a></div>
							<!-- /wp:button -->

							<!-- wp:button {"className":"is-style-icon"} -->
							<div class="wp-block-button is-style-icon"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Link', 'beapi-blocks-theme' ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"className":"size-large"} -->
				<figure class="wp-block-image size-large"><img src="" alt="" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
