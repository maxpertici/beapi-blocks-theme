<?php
/**
 * Title: List of events, 1 column
 * Slug: beapi-blocks-theme/template-query-events
 * Categories: query
 * Block Types: core/query
 * Description: A list of events, 1 column, with featured image and post date.
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>

<!-- wp:query {"queryId":27,"query":{"perPage":7,"pages":0,"offset":"0","postType":"sc_event","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"wpgb":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
<!-- wp:post-template {"align":"full","className":"grid-events-1","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"17rem"}} -->
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-card-event-1"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->