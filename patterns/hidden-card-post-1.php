<?php
/**
 * Title: Hidden card post 1
 * Slug: beapi-blocks-theme/hidden-card-post-1
 * Description: Card post.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

$card_additional_class = ! empty( $args['card_additional_classes'] ) ? $args['card_additional_classes'] : 'wp-pattern-hidden-card-post-1';
$heading_level         = ! empty( $args['heading_level'] ) ? $args['heading_level'] : 3;
$heading_class         = ! empty( $args['heading_class'] ) ? $args['heading_class'] : 'is-style-h4';
$terms_class           = ! empty( $args['terms_class'] ) ? $args['terms_class'] : 'is-style-tag';
?>
<!-- wp:group {"tagName":"article","className":"wp-pattern-hidden-card wp-pattern-hidden-card-post <?php echo esc_attr( $card_additional_class ); ?>","layout":{"type":"constrained"},"metadata":{"patternName":"beapi-blocks-theme/hidden-card-post-1","name":"Hidden card post 1"}} -->
<article class="wp-block-group wp-pattern-hidden-card wp-pattern-hidden-card-post <?php echo esc_attr( $card_additional_class ); ?>">
	<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}}} /-->
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}}} -->
	<div class="wp-block-group" style="margin-top:0">
		<!-- wp:post-date {"className":"is-style-label"} /-->
		<!-- wp:post-title {"isLink":true,"level":<?php echo esc_attr( $heading_level ); ?>,"className":"<?php echo esc_attr( $heading_class ); ?>"} /-->
		<!-- wp:post-terms {"term":"category","className":"<?php echo esc_attr( $terms_class ); ?>"} /-->
	</div>
	<!-- /wp:group -->
</article>
<!-- /wp:group -->
