<?php
/**
 * Title: Hidden archive job offer
 * Slug: beapi-blocks-theme/hidden-archive-job-offer-1
 * Description: Archive job offer in two columns.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */
?>

<!-- wp:yoast-seo/breadcrumbs {"className":"alignwide"} /-->

<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|3-xl"},"blockGap":"var:preset|spacing|xl"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--3-xl)"><!-- wp:yoast-seo/breadcrumbs {"className":"alignwide"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|md","margin":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|3-xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--2-xl);margin-bottom:var(--wp--preset--spacing--3-xl)"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"align":"wide"} /-->

<!-- wp:paragraph {"align":"center","className":"is-style-large","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-center is-style-large" style="font-style:normal;font-weight:500">Lorem ipsum</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide","className":"wp-pattern-archive-columns","style":{"spacing":{"margin":{"top":"var:preset|spacing|2-xl"},"blockGap":{"left":"var:preset|spacing|4-xl"}}}} -->
<div class="wp-block-columns alignwide wp-pattern-archive-columns" style="margin-top:var(--wp--preset--spacing--2-xl)"><!-- wp:column {"width":"27%","style":{"spacing":{"padding":{"top":"var:preset|spacing|l"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--l);flex-basis:27%"><!-- wp:group {"className":"wp-pattern-hidden-filters","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-pattern-hidden-filters"><!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/3e43cf251adf4a8a8440918a5486f6c7","id":8} /-->

<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/3e43cf251adf4a8a8440918a5486f6c7","id":10} /-->

<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/3e43cf251adf4a8a8440918a5486f6c7","id":1} /-->

<!-- wp:wp-grid-builder/facet {"grid":"wpgb-content-block/3e43cf251adf4a8a8440918a5486f6c7","id":9} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"73%"} -->
<div class="wp-block-column" style="flex-basis:73%"><!-- wp:wp-grid-builder/facet {"align":"wide","grid":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8","id":6} /-->

<!-- wp:query {"queryId":27,"query":{"perPage":20,"pages":0,"offset":"0","postType":"job-offer","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"wpgb":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"full","className":"grid-job-offers-1","style":{"spacing":{"blockGap":"var:preset|spacing|md"}},"layout":{"type":"grid","columnCount":1,"minimumColumnWidth":null}} -->
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-card-job-offer-1"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Sorry, but nothing was found. Please try a search with different keywords.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:wp-grid-builder/facet {"align":"center","grid":"wpgb-content-block/8aea04cc87d94d57ad885cb8533b55b8","id":5} /-->
<!-- wp:pattern {"slug":"beapi-blocks-theme/unsolicited-application"} /-->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
