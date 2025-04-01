<?php

/**
 * Title: Hidden card search 1
 * Slug: beapi-blocks-theme/hidden-card-search-1
 * Description: Card search.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

?>
<!-- wp:group {"align":"wide","className":"wp-pattern-hidden-filters wp-pattern-hidden-card-search-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide wp-pattern-hidden-filters wp-pattern-hidden-card-search-1">
	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|3-xl"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
	<div class="wp-block-group alignfull" style="margin-bottom:var(--wp--preset--spacing--xl)">
		<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":"1","postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[],"format":[]},"metadata":{"wpgb":"wpgb-content-block/3e43cf251adf4a8a8440918a5486f6c7"},"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"align":"full","className":"grid-post-1","layout":{"type":"default"}} -->
			<!-- wp:group {"tagName":"article","metadata":{"patternName":"beapi-blocks-theme/hidden-card-post-1","name":"Hidden card post 1"},"className":"wp-pattern-hidden-card wp-pattern-hidden-card-post wp-pattern-hidden-card-post-1","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<article class="wp-block-group wp-pattern-hidden-card wp-pattern-hidden-card-post wp-pattern-hidden-card-post-1">
				<!-- wp:post-featured-image {"aspectRatio":"1","width":"174px","height":"174px","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|xs"}}} -->
				<div class="wp-block-group" style="margin-top:0">
					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:post-date {"className":"is-style-label","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}}} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"level":3,"isLink":true,"className":"is-style-h5","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}}} /-->

					<!-- wp:post-excerpt {"excerptLength":20} /-->
				</div>
			<!-- /wp:group -->
			</article>
			<!-- /wp:group -->

			<!-- wp:separator -->
				<hr class="wp-block-separator"/>
			<!-- /wp:separator -->

		<!-- /wp:post-template -->
		</div>
	<!-- /wp:query -->
	</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
