<?php
/**
 * Title: Hidden card event 2
 * Slug: beapi-blocks-theme/hidden-card-event-2
 * Description: Card event.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

$icons_uri             = get_template_directory_uri() . '/dist/icons/';
$card_additional_class = ! empty( $args['card_additional_classes'] ) ? $args['card_additional_classes'] : 'wp-pattern-hidden-card-event-1';
$heading_level         = ! empty( $args['heading_level'] ) ? $args['heading_level'] : 2;
$heading_class         = ! empty( $args['heading_class'] ) ? $args['heading_class'] : 'is-style-h5';
?>
<!-- wp:group {"tagName":"article","metadata":{"patternName":"beapi-blocks-theme/hidden-card-event-2","name":"Hidden card event 2"},"className":"wp-pattern-hidden-card wp-pattern-hidden-card-event event wp-pattern-hidden-card-event-3 <?php echo esc_attr( $card_additional_class ); ?>","style":{"border":{"bottom":{"color":"var:preset|color|gray-75","width":"1px"},"top":{},"right":{},"left":{}},"spacing":{"padding":{"bottom":"var:preset|spacing|md"}}},"layout":{"type":"grid","minimumColumnWidth":null,"columnCount":1}} -->
<article class="wp-block-group wp-pattern-hidden-card wp-pattern-hidden-card-event event wp-pattern-hidden-card-event-3 <?php echo esc_attr( $card_additional_class ); ?>" style="border-bottom-color:var(--wp--preset--color--gray-75);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--md)"><!-- wp:post-featured-image {"aspectRatio":"3/4","style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|s"}}} -->
<div class="wp-block-group" style="margin-top:0"><!-- wp:columns {"className":"wp-pattern-hidden-card-event__content","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s","left":"var:preset|spacing|md"}}}} -->
<div class="wp-block-columns wp-pattern-hidden-card-event__content"><!-- wp:column {"width":"8%"} -->
<div class="wp-block-column" style="flex-basis:8%"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"sugar-calendar/event-date-short"}}},"className":"has-text-align-center wp-pattern-hidden-card-event__dates"} -->
<p class="has-text-align-center wp-pattern-hidden-card-event__dates"><?php esc_html_e( 'Event dates', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"92%","style":{"spacing":{"blockGap":"var:preset|spacing|2-xs"}}} -->
<div class="wp-block-column" style="flex-basis:92%"><!-- wp:post-terms {"term":"sc_event_category","className":"is-style-label"} /-->

<!-- wp:post-title {"isLink":true,"level":<?php echo esc_attr( $heading_level ); ?>,"className":"<?php echo esc_attr( $heading_class ); ?>"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"event__meta","style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group event__meta"><!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Theme","count":3},"icon":{"name":"icon-map-marker","label":"map-marker","type":"sprite"},"url":"<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-map-marker","size":20} -->
<div class="wp-block-beapi-icon-block"><div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px"><svg class="icon icon-map-marker" style="width:20px;height:20px" focusable="false" aria-hidden="true"><use href="<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-map-marker"></use></svg></div></div>
<!-- /wp:beapi/icon-block -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"sugar-calendar/event-location"}}},"className":"has-text-align-center is-style-small","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-800"} -->
<p class="has-text-align-center is-style-small has-text-800-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Event location', 'beapi-blocks-theme' ); ?>/p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"event__meta","style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group event__meta"><!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Theme","count":3},"icon":{"name":"icon-clock","label":"clock","type":"sprite"},"url":"<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-clock","size":20} -->
<div class="wp-block-beapi-icon-block"><div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px"><svg class="icon icon-clock" style="width:20px;height:20px" focusable="false" aria-hidden="true"><use href="<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-clock"></use></svg></div></div>
<!-- /wp:beapi/icon-block -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"sugar-calendar/event-time"}}},"className":"has-text-align-center is-style-small","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-800"} -->
<p class="has-text-align-center is-style-small has-text-800-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Event time', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"excerptLength":34,"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-75"}}},"spacing":{"margin":{"top":"var:preset|spacing|md"}}},"textColor":"gray-75"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->