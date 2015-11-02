<?php

/**
 * Template Name: Beaver Builder Page
 *
 * This file strips extraneous content and markup that are not needed
 * when a Beaver Builder page is in use.
 *
 * @package   BB_Templates_Genesis
 * @author    Crowd Favorite, Carrie Dils
 * @license   GPL-2.0+
 */

add_filter( 'body_class', 'beaver_body_class' );
/**
 * Adds a css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function beaver_body_class( $classes ) {
	$classes[] = 'fl-builder-full';
	return $classes;
}

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove div.site-inner's div.wrap.
add_filter( 'genesis_structural_wrap-site-inner', '__return_empty_string' );

// Remove the post title.
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

genesis();
