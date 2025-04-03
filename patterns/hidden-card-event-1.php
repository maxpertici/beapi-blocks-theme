<?php
/**
 * Title: Hidden card event 1
 * Slug: beapi-blocks-theme/hidden-card-event-1
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
<!-- wp:group {"tagName":"article","metadata":{"patternName":"beapi-blocks-theme/hidden-card-event-1","name":"Hidden card event 1"},"className":"wp-pattern-hidden-card wp-pattern-hidden-card-event wp-pattern-hidden-card-event-1 event <?php echo esc_attr( $card_additional_class ); ?>","layout":{"type":"grid","minimumColumnWidth":"25rem","columnCount":null}} -->
<article class="wp-block-group wp-pattern-hidden-card wp-pattern-hidden-card-event wp-pattern-hidden-card-event-1 event <?php echo esc_attr( $card_additional_class ); ?>"><!-- wp:post-featured-image {"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|s"}}} -->
<div class="wp-block-group" style="margin-top:0"><!-- wp:columns {"className":"wp-pattern-hidden-card-event__content","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s","left":"var:preset|spacing|s"}}}} -->
<div class="wp-block-columns wp-pattern-hidden-card-event__content"><!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"sugar-calendar/event-date-short"}}},"className":"has-text-align-center wp-pattern-hidden-card-event__dates"} -->
<p class="has-text-align-center wp-pattern-hidden-card-event__dates">Event dates</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"82%","style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
<div class="wp-block-column" style="flex-basis:82%">
<!-- wp:post-title {"isLink":true,"level":<?php echo esc_attr( $heading_level ); ?>,"className":"<?php echo esc_attr( $heading_class ); ?>"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"event__meta","style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group event__meta"><!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Theme","count":3},"icon":{"name":"icon-map-marker","label":"map-marker","type":"sprite"},"url":"<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-map-marker","size":20} -->
<div class="wp-block-beapi-icon-block"><div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px"><svg class="icon icon-map-marker" style="width:20px;height:20px" focusable="false" aria-hidden="true"><use href="<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-map-marker"></use></svg></div></div>
<!-- /wp:beapi/icon-block -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"sugar-calendar/event-location"}}},"className":"has-text-align-center is-style-small","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-800"} -->
<p class="has-text-align-center is-style-small has-text-800-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Event location', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"event__meta","style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group event__meta"><!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Theme","count":3},"icon":{"name":"icon-clock","label":"clock","type":"sprite"},"url":"<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-clock","size":20} -->
<div class="wp-block-beapi-icon-block"><div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px"><svg class="icon icon-clock" style="width:20px;height:20px" focusable="false" aria-hidden="true"><use href="<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-clock"></use></svg></div></div>
<!-- /wp:beapi/icon-block -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"sugar-calendar/event-time"}}},"className":"has-text-align-center is-style-small","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-800"} -->
<p class="has-text-align-center is-style-small has-text-800-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Event time', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->