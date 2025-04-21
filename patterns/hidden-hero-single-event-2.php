<?php
/**
 * Title: Hero single event 2
 * Slug: beapi-blocks-theme/hidden-hero-single-event-2
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */
use function BEA\Theme\Framework\Helpers\Sugar_Calendar\get_event_calendar_links;

$icons_uri = get_template_directory_uri() . '/dist/icons/';
?>
<!-- wp:group {"tagName":"header","metadata":{"patternName":"beapi-blocks-theme/hidden-hero-single-event-2","name":"Hero single event 2"},"align":"wide","className":"wp-pattern-hidden-hero-single-event wp-pattern-hidden-hero-single-event-2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|3-xl"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignwide wp-pattern-hidden-hero-single-event wp-pattern-hidden-hero-single-event-2" style="margin-bottom:var(--wp--preset--spacing--3-xl)">
	<!-- wp:paragraph -->
	<p>TODO : insérer fil d'ariane</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|3-xl"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top">
		<!-- wp:column {"verticalAlignment":"top","width":"55.6%","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}}} -->
		<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl);flex-basis:55.6%">
			<!-- wp:post-terms {"term":"sc_event_category","textAlign":"left","className":"is-style-label"} /-->

			<!-- wp:post-title {"textAlign":"left","level":1,"className":"is-style-h2","style":{"spacing":{"margin":{"top":"var:preset|spacing|xs"}}}} /-->

			<!-- wp:post-excerpt {"excerptLength":10000,"className":"is-style-default","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"bottom":"var:preset|spacing|xl","top":"var:preset|spacing|s"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"large"} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
				<div class="wp-block-group">
					<!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Theme","count":3},"icon":{"name":"icon-calendar","label":"Calendar","type":"sprite"},"url":"<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-calendar","size":24} -->
					<div class="wp-block-beapi-icon-block">
						<div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px"><svg class="icon icon-calendar" style="width:24px;height:24px" focusable="false" aria-hidden="true">
								<use href="<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-calendar"></use>
							</svg></div>
					</div>
					<!-- /wp:beapi/icon-block -->

					<!-- wp:paragraph {"className":"is-style-label"} -->
					<p class="is-style-label">
						<?php esc_html_e( 'Date and time', 'beapi-blocks-theme' ); ?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"align":"left","metadata":{"bindings":{"content":{"source":"sugar-calendar/event-date"}}},"className":"has-text-align-center is-style-default","style":{"spacing":{"padding":{"left":"28px"}}},"textColor":"text-800"} -->
				<p class="has-text-align-left has-text-align-center is-style-default has-text-800-color has-text-color" style="padding-left:28px">
					<?php esc_html_e( 'Event dates', 'beapi-blocks-theme' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"left","metadata":{"bindings":{"content":{"source":"sugar-calendar/event-time"}}},"className":"has-text-align-center","style":{"spacing":{"padding":{"left":"28px"}}},"textColor":"text-800"} -->
				<p class="has-text-align-left has-text-align-center has-text-800-color has-text-color" style="padding-left:28px">
					<?php esc_html_e( 'Event times', 'beapi-blocks-theme' ); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Theme","count":3},"icon":{"name":"icon-map-marker","label":"map-marker","type":"sprite"},"url":"<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-map-marker","size":24} -->
					<div class="wp-block-beapi-icon-block">
						<div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px"><svg class="icon icon-map-marker" style="width:24px;height:24px" focusable="false" aria-hidden="true">
								<use href="<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-map-marker"></use>
							</svg></div>
					</div>
					<!-- /wp:beapi/icon-block -->

					<!-- wp:paragraph {"className":"is-style-label"} -->
					<p class="is-style-label">
						<?php esc_html_e( 'Location', 'beapi-blocks-theme' ); ?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"align":"left","metadata":{"bindings":{"content":{"source":"sugar-calendar/event-location"}}},"className":"has-text-align-center is-style-default","style":{"spacing":{"padding":{"left":"28px"}}},"textColor":"text-800"} -->
				<p class="has-text-align-left has-text-align-center is-style-default has-text-800-color has-text-color" style="padding-left:28px">
					<?php esc_html_e( 'Event location', 'beapi-blocks-theme' ); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Theme","count":3},"icon":{"name":"icon-euro","label":"euro","type":"sprite"},"url":"<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-euro","size":24} -->
					<div class="wp-block-beapi-icon-block">
						<div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px"><svg class="icon icon-euro" style="width:24px;height:24px" focusable="false" aria-hidden="true">
								<use href="<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-euro"></use>
							</svg></div>
					</div>
					<!-- /wp:beapi/icon-block -->

					<!-- wp:paragraph {"className":"is-style-label"} -->
					<p class="is-style-label">
						<?php esc_html_e( 'Price', 'beapi-blocks-theme' ); ?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"align":"left","className":"is-style-default","style":{"spacing":{"padding":{"left":"28px"}}}} -->
				<p class="has-text-align-left is-style-default" style="padding-left:28px">
					<?php esc_html_e( 'xxx euros', 'beapi-blocks-theme' ); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"wp-pattern-hidden-hero-single-event__buttons","style":{"spacing":{"margin":{"top":"var:preset|spacing|l"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<div class="wp-block-group wp-pattern-hidden-hero-single-event__buttons" style="margin-top:var(--wp--preset--spacing--l)">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"metadata":{"bindings":{"url":{"source":"sugar-calendar/event-registration-url","args":{"key":"url"}},"text":{"source":"sugar-calendar/event-registration-url","args":{"key":"text"}}}},"className":"is-style-primary-md"} -->
					<div class="wp-block-button is-style-primary-md"><a class="wp-block-button__link wp-element-button" href="#" target="_blank" rel="noreferrer noopener nofollow">
							<?php esc_html_e( 'Registration link', 'beapi-blocks-theme' ); ?>
						</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
				<?php echo \BEA\Theme\Framework\Helpers\Sugar_Calendar\get_event_calendar_links(); // phpcs:ignore ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"44.4%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:44.4%">
			<!-- wp:post-featured-image {"aspectRatio":"2/3"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</header>
<!-- /wp:group -->
