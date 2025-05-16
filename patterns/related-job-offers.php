<?php
/**
 * Title: Related job offers
 * Slug: beapi-blocks-theme/related-job-offers
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>

<!-- wp:columns {"metadata":{"name":"Related job offers"},"align":"wide","style":{"border":{"top":{"color":"var:preset|color|black","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3-xl"}}}} -->
<div class="wp-block-columns alignwide" style="border-top-color:var(--wp--preset--color--black);border-top-width:1px;padding-top:var(--wp--preset--spacing--3-xl)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"is-style-h3"} -->
<p class="is-style-h3">Opportunities that may interest you</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-link"} -->
<div class="wp-block-button is-style-link"><a class="wp-block-button__link wp-element-button" href="#">See all</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":29,"query":{"perPage":4,"pages":0,"offset":0,"postType":"job-offer","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"beapi-blocks-theme/template-query-job-offers","name":"List of job offers"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"full","className":"grid-job-offers-1","style":{"spacing":{"blockGap":"var:preset|spacing|md"}},"layout":{"type":"grid","columnCount":1,"minimumColumnWidth":null}} -->
<!-- wp:group {"tagName":"article","metadata":{"patternName":"beapi-blocks-theme/hidden-card-job-offer-1","name":"Hidden card job offer"},"className":"wp-pattern-hidden-card wp-pattern-hidden-card-job-offer","style":{"border":{"bottom":{"color":"var:preset|color|gray-100","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|md"},"blockGap":"var:preset|spacing|2-xs"}},"layout":{"type":"constrained"}} -->
<article class="wp-block-group wp-pattern-hidden-card wp-pattern-hidden-card-job-offer" style="border-bottom-color:var(--wp--preset--color--gray-100);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--md)"><!-- wp:post-title {"isLink":true,"align":"full","className":"is-style-h4"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|md"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull"><!-- wp:post-terms {"term":"contract-type","className":"is-style-label"} /-->

<!-- wp:post-terms {"term":"seniority-level","className":"is-style-label"} /-->

<!-- wp:post-terms {"term":"location","className":"is-style-label"} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
