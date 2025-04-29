<?php
/**
 * Title: Hidden search title 1
 * Slug: beapi-blocks-theme/hidden-search-title-1
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

$label = ! empty( $args['label'] ) ? $args['label'] : __( 'Search', 'beapi-blocks-theme' );
?>
<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:query-title {"type":"search"} /-->
</div>
<!-- /wp:group -->
