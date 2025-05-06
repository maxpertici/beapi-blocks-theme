<?php
/**
 * Title: Hero single event 1
 * Slug: beapi-blocks-theme/hidden-hero-single-event-1
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */
$icons_uri = get_template_directory_uri() . '/dist/icons/';
?>
<!-- wp:group {"tagName":"header","align":"wide","className":"wp-pattern-hidden-hero-single-event wp-pattern-hidden-hero-single-event-1","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|3-xl"},"blockGap":"var:preset|spacing|xl"}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignwide wp-pattern-hidden-hero-single-event wp-pattern-hidden-hero-single-event-1" style="margin-bottom:var(--wp--preset--spacing--3-xl)">
<!-- wp:paragraph -->
<p>TODO : insérer fil d'ariane</p>
<!-- /wp:paragraph -->
<!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"spacing":{"margin":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"}}}} /-->

<!-- wp:post-terms {"term":"sc_event_category","textAlign":"center","className":"is-style-label"} /-->

<!-- wp:post-title {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|2-xs"}}}} /-->

<!-- wp:columns {"align":"wide","className":"wp-pattern-hidden-hero-single-event__metas"} -->
<div class="wp-block-columns alignwide wp-pattern-hidden-hero-single-event__metas"><!-- wp:column {"className":"event__meta","style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}}} -->
<div class="wp-block-column event__meta"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Theme","count":3},"icon":{"name":"icon-calendar","label":"Calendar","type":"sprite"},"url":"<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-calendar","size":24} -->
<div class="wp-block-beapi-icon-block"><div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px"><svg class="icon icon-calendar" style="width:24px;height:24px" focusable="false" aria-hidden="true"><use href="<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-calendar"></use></svg></div></div>
<!-- /wp:beapi/icon-block -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( 'Date and time', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"sugar-calendar/event-date"}}},"className":"is-style-h6","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-800"}}}},"textColor":"text-800"} -->
<p class="has-text-align-center is-style-h6"><?php esc_html_e( 'Event dates', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"sugar-calendar/event-time"}}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-800"}}}},"textColor":"text-800"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Event times', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"className":"event__meta","style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}}} -->
<div class="wp-block-column event__meta"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Theme","count":3},"icon":{"name":"icon-map-marker","label":"map-marker","type":"sprite"},"url":"<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-map-marker","size":24} -->
<div class="wp-block-beapi-icon-block"><div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px"><svg class="icon icon-map-marker" style="width:24px;height:24px" focusable="false" aria-hidden="true"><use href="<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-map-marker"></use></svg></div></div>
<!-- /wp:beapi/icon-block -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( 'Location', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"sugar-calendar/event-location"}}},"className":"is-style-h6","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-800"}}}},"textColor":"text-800"} -->
<p class="has-text-align-center is-style-h6"><?php esc_html_e( 'Event location', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"className":"wp-pattern-hidden-hero-single-event__buttons"} -->
<div class="wp-block-group wp-pattern-hidden-hero-single-event__buttons"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"metadata":{"bindings":{"url":{"source":"sugar-calendar/event-registration-url","args":{"key":"url"}}, "text":{"source":"sugar-calendar/event-registration-url","args":{"key":"text"}}}},"className":"is-style-primary-md"} -->
<div class="wp-block-button is-style-primary-md"><a class="wp-block-button__link wp-element-button" href="#" target="_blank" rel="noreferrer noopener nofollow"><?php esc_html_e( 'Registration link', 'beapi-blocks-theme' ); ?></a></div><!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php echo \BEA\Theme\Framework\Helpers\Sugar_Calendar\get_event_calendar_links(); // phpcs:ignore ?>
</div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"excerptLength":10000,"className":"is-style-default","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"bottom":"var:preset|spacing|xl"}}},"fontSize":"large"} /--></header>
<!-- /wp:group -->