<?php
/**
 * Title: Hidden search card 2
 * Slug: beapi-blocks-theme/hidden-search-card-2
 * Description: Card search.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

$card_additional_class = ! empty( $args['card_additional_classes'] ) ? $args['card_additional_classes'] : 'wp-pattern-hidden-card--search';
$heading_level         = ! empty( $args['heading_level'] ) ? $args['heading_level'] : 2;
$heading_class         = ! empty( $args['heading_class'] ) ? $args['heading_class'] : 'is-style-h5';
$terms_class           = ! empty( $args['terms_class'] ) ? $args['terms_class'] : 'is-style-label';
?>
<!-- wp:columns {"className":"wp-pattern-hidden-card wp-pattern-hidden-card-post <?php echo esc_attr( $card_additional_class ); ?>","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|md"}}}} -->
<div class="wp-block-columns wp-pattern-hidden-card wp-pattern-hidden-card-post <?php echo esc_attr( $card_additional_class ); ?>" style="padding-bottom:var(--wp--preset--spacing--md)">
	<!-- wp:column {"width":"140px","style":{"spacing":{"blockGap":"var:preset|spacing|2-xs"}}} -->
	<div class="wp-block-column" style="flex-basis:140px">
		<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"beapi-blocks-theme/post-type"}}},"className":"is-style-label"} -->
		<p class="is-style-label">beapi-blocks-theme/post-type</p>
		<!-- /wp:paragraph -->
		<!-- wp:post-date {"className":"<?php echo esc_attr( $terms_class ); ?>"} /-->
		<!-- wp:post-terms {"term":"category","className":"<?php echo esc_attr( $terms_class ); ?>"} /-->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":""} -->
	<div class="wp-block-column">
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-group" style="margin-top:0">
			<!-- wp:post-title {"level":<?php echo esc_attr( $heading_level ); ?>,"isLink":true,"className":"<?php echo esc_attr( $heading_class ); ?>","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}}} /-->

			<!-- wp:post-excerpt {"excerptLength":30} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
