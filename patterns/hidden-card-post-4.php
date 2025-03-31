<?php
/**
 * Title: Hidden card post 4
 * Slug: beapi-blocks-theme/hidden-card-post-4
 * Description: Card post.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage BeAPI Blocks Theme
 * @since BeAPI Blocks Theme 1.0
 */

get_template_part(
	'patterns/hidden-card-post-1',
	null,
	[
		'card_additional_classes' => 'wp-pattern-hidden-card-post-4',
		'heading_level'           => 2,
		'heading_class'           => 'is-style-h3',
		'terms_class'             => 'is-style-default',
	]
);
