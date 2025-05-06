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
$heading_class         = ! empty( $args['heading_class'] ) ? $args['heading_class'] : 'is-style-h4';
$terms_class           = ! empty( $args['terms_class'] ) ? $args['terms_class'] : 'is-style-tag';
?>
<!-- wp:group {"tagName":"article","metadata":{"patternName":"beapi-blocks-theme/hidden-card-event-1","name":"Hidden card event 1"},"className":"wp-pattern-hidden-card wp-pattern-hidden-card-event wp-pattern-hidden-card-event-1 <?php echo esc_attr( $card_additional_class ); ?>","layout":{"type":"constrained"}} -->
<article class="wp-block-group wp-pattern-hidden-card wp-pattern-hidden-card-event wp-pattern-hidden-card-event-1 <?php echo esc_attr( $card_additional_class ); ?>"><!-- wp:post-featured-image {"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}}} -->
<div class="wp-block-group" style="margin-top:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"sugar-calendar/event-date-short"}}},"className":"wp-pattern-hidden-card-event__dates"} -->
<p class="has-text-align-center wp-pattern-hidden-card-event__dates"><?php esc_html_e( 'Event dates', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"level":<?php echo esc_attr( $heading_level ); ?>,"className":"<?php echo esc_attr( $heading_class ); ?>"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:beapi/icon-block {"collection":{"name":"icon-theme","label":"Theme","count":3},"icon":{"name":"icon-map-marker","label":"map-marker","type":"sprite"},"url":"<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-map-marker","size":20} -->
<div class="wp-block-beapi-icon-block"><div class="icon-container" style="border-radius:0%;display:inline-block;padding:0px 0px 0px 0px"><svg class="icon icon-map-marker" style="width:20px;height:20px" focusable="false" aria-hidden="true"><use href="<?php echo esc_url( $icons_uri ); ?>sprite.svg#icon-map-marker"></use></svg></div></div>
<!-- /wp:beapi/icon-block -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"sugar-calendar/event-location"}}},"className":"has-text-align-center is-style-small","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-800"} -->
<p class="has-text-align-center is-style-small has-text-800-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Event location', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
