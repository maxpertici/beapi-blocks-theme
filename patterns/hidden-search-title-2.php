<?php
/**
 * Title: Hidden search title 2
 * Slug: beapi-blocks-theme/hidden-search-title-2
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

$label = ! empty( $args['label'] ) ? $args['label'] : __( 'Search', 'beapi-blocks-theme' );
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php echo esc_html( $label ); ?></h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
