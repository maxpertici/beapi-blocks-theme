<?php
/**
 * Title: List of job offers
 * Slug: beapi-blocks-theme/template-query-job-offers
 * Categories: query
 * Block Types: core/query
 * Description: A list of job offers with job offer title and taxonomies.
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:query {"queryId":29,"query":{"perPage":4,"pages":0,"offset":0,"postType":"job-offer","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"beapi-blocks-theme/template-query-job-offers","name":"List of job offers"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"full","className":"grid-job-offers-1","style":{"spacing":{"blockGap":"var:preset|spacing|md"}},"layout":{"type":"grid","columnCount":1,"minimumColumnWidth":null}} -->
<!-- wp:group {"tagName":"article","metadata":{"patternName":"beapi-blocks-theme/hidden-card-job-offer-1","name":"Hidden card job offer"},"className":"wp-pattern-hidden-card wp-pattern-hidden-card-job-offer","style":{"border":{"bottom":{"color":"var:preset|color|gray-100","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|md"},"blockGap":"var:preset|spacing|2-xs"}},"layout":{"type":"constrained"}} -->
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-card-job-offer-1"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
