<?php
/**
 * Title: Hidden search form
 * Slug: beapi-blocks-theme/hidden-search-form
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

$label       = ! empty( $args['label'] ) ? $args['label'] : __( 'Search', 'beapi-blocks-theme' );
$button_text = ! empty( $args['button_text'] ) ? $args['button_text'] : __( 'Search', 'beapi-blocks-theme' );
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:search {"label":"<?php echo esc_attr( $label ); ?>","buttonText":"<?php echo esc_attr( $button_text ); ?>"} /-->
</div>
<!-- /wp:group -->
