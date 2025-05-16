<?php
/**
 * Title: Related job offers
 * Slug: beapi-blocks-theme/more-job-offers
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>

<!-- wp:columns {"metadata":{"name":"Related job offers"},"align":"wide","style":{"border":{"top":{"color":"var:preset|color|black","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3-xl"}}}} -->
<div class="wp-block-columns alignwide" style="border-top-color:var(--wp--preset--color--black);border-top-width:1px;padding-top:var(--wp--preset--spacing--3-xl)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"is-style-h3"} -->
<p class="is-style-h3"><?php esc_html_e( 'Opportunities that may interest you', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-link"} -->
<div class="wp-block-button is-style-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( get_post_type_archive_link( 'job-offer' ) ); ?>"><?php esc_html_e( 'See all', 'beapi-blocks-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":29,"query":{"perPage":4,"pages":0,"offset":0,"postType":"job-offer","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"beapi-blocks-theme/template-query-job-offers","name":"List of job offers"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"full","className":"grid-job-offers-1","style":{"spacing":{"blockGap":"var:preset|spacing|md"}},"layout":{"type":"grid","columnCount":1,"minimumColumnWidth":null}} -->
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-card-job-offer-1"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'beapi-blocks-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
