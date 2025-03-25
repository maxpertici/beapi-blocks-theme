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

<!-- wp:group {"metadata":{"name":"404","patternName":"beapi-blocks-theme/404"}, "tagName":"main","style":{"spacing":{"padding":{"top":"110px","bottom":"80px","left":"var:preset|spacing|3-xl","right":"var:preset|spacing|3-xl"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="padding-top:110px;padding-right:var(--wp--preset--spacing--3-xl);padding-bottom:80px;padding-left:var(--wp--preset--spacing--3-xl)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"bottom"} -->
			<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xl"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:heading {"level":1} -->
						<h1 class="wp-block-heading">Oups...</h1>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"className":"is-style-large"} -->
						<p class="is-style-large"><?php esc_html_e( 'La page que vous recherchez semble introuvable', 'beapi-blocks-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><?php esc_html_e( 'code erreur : 404', 'beapi-blocks-theme' ); ?><br><?php esc_html_e( 'Voici quelques liens utiles à la place :', 'beapi-blocks-theme' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-xs"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
							<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label"} -->
								<p class="is-style-label"><?php esc_html_e( 'retour à l’accueil', 'beapi-blocks-theme' ); ?></p>
								<!-- /wp:paragraph -->

								<!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Thème","count":1},"icon":{"name":"icon-arrow-right","label":"Arrow right","type":"sprite"},"url":"<?php echo esc_url( $template_icons_uri ); ?>#icon-arrow-right","size":24,"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}} -->
								<div class="wp-block-beapi-icon-block">
									<div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px;"><svg class="icon icon-arrow-right" style="width:24px;height:24px" focusable="false" aria-hidden="true">
											<use href="<?php echo esc_url( $template_icons_uri ); ?>#icon-arrow-right"></use>
										</svg></div>
								</div>
								<!-- /wp:beapi/icon-block -->
							</div>
							<!-- /wp:group -->

							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-xs"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
							<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label"} -->
								<p class="is-style-label"><?php esc_html_e( 'Lien', 'beapi-blocks-theme' ); ?></p>
								<!-- /wp:paragraph -->

								<!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Thème","count":1},"icon":{"name":"icon-arrow-right","label":"Arrow right","type":"sprite"},"url":"<?php echo esc_url( $template_icons_uri ); ?>#icon-arrow-right","size":24,"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}} -->
								<div class="wp-block-beapi-icon-block">
									<div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px;"><svg class="icon icon-arrow-right" style="width:24px;height:24px" focusable="false" aria-hidden="true">
											<use href="<?php echo esc_url( $template_icons_uri ); ?>#icon-arrow-right"></use>
										</svg></div>
								</div>
								<!-- /wp:beapi/icon-block -->
							</div>
							<!-- /wp:group -->

							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-xs"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
							<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label"} -->
								<p class="is-style-label">Lien</p>
								<!-- /wp:paragraph -->

								<!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Thème","count":1},"icon":{"name":"icon-arrow-right","label":"Arrow right","type":"sprite"},"url":"<?php echo esc_url( $template_icons_uri ); ?>#icon-arrow-right","size":24,"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}} -->
								<div class="wp-block-beapi-icon-block">
									<div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px;"><svg class="icon icon-arrow-right" style="width:24px;height:24px" focusable="false" aria-hidden="true">
											<use href="<?php echo esc_url( $template_icons_uri ); ?>#icon-arrow-right"></use>
										</svg></div>
								</div>
								<!-- /wp:beapi/icon-block -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
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
</main>
<!-- /wp:group -->
