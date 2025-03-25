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

$template_icons_uri = get_template_directory_uri() . '/dist/icons/sprite.svg';
?>


<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"bottom"} -->
		<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xl"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group"><!-- wp:heading {"level":1} -->
					<h1 class="wp-block-heading"><?php esc_html_e( 'Oups...', 'beapi-blocks-theme' ); ?></h1>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"is-style-large"} -->
					<p class="is-style-large"><?php esc_html_e( 'La page que vous recherchez semble introuvable', 'beapi-blocks-theme' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'code erreur : 404', 'beapi-blocks-theme' ); ?><br><?php esc_html_e( 'Voici quelques liens utiles à la place :', 'beapi-blocks-theme' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-icon"} -->
					<div class="wp-block-button is-style-icon"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Retour à l\'accueil', 'beapi-blocks-theme' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-icon"} -->
					<div class="wp-block-button is-style-icon"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Lien', 'beapi-blocks-theme' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-icon"} -->
					<div class="wp-block-button is-style-icon"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Lien', 'beapi-blocks-theme' ); ?></a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image -->
			<figure class="wp-block-image"><img alt="" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
