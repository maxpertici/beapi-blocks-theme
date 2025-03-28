<?php
/**
 * Title: Hidden queried object title
 * Slug: beapi-blocks-theme/hidden-queried-object-title
 * Description: Hidden heading for the archive page.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:heading {"level":1,"align":"wide","className":"is-style-h2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}}} -->
<h1 class="wp-block-heading alignwide is-style-h2" style="margin-bottom:var(--wp--preset--spacing--xl)">
	<?php echo esc_html( get_the_title( get_queried_object_id() ) ); ?>
</h1>
<!-- /wp:heading -->
