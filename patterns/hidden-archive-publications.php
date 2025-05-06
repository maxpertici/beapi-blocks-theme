<?php

/**
 * Title: Hidden archive publications
 * Slug: beapi-blocks-theme/hidden-archive-publications
 * Description: Archive publications in three columns.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */
?>
<!-- wp:query {"queryId":9,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[],"format":[]},"metadata":{"wpgb":"wpgb-content-block/55a621d2d9f54209bae7570faecf256d"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"align":"full","className":"grid-publications","style":{"spacing":{"blockGap":"var:preset|spacing|2-xl"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"18rem"}} -->
	<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-card-publication"} /-->
	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'No publications found', 'beapi-blocks-theme' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->