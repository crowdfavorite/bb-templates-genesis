<?php

/**
 * Template Name: Beaver Builder Post
 *
 * This file strips extraneous content and markup that are not needed
 * when a Beaver Builder page is in use on a post.
 *
 * If project does not use Beaver Builder plugin, you can remove this template.
 *
 * @package CF_Genesis
 * @author Carrie Dils
 * @license GPL-2.0+
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

/**
 * Remove unneccessary post elements.
 * 
 * Remove all default post loop output with the exception of post content. Essentially
 * removes everything between the header and the footer, including markup, but leaves
 * the_content() intact.
 *
 * @package Genesis\Entry
 * @see genesis_reset_loops()
 * 
 */
remove_action( 'genesis_entry_header', 'genesis_do_post_format_image', 4 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

remove_action( 'genesis_after_entry', 'genesis_do_author_box_single', 8 );
remove_action( 'genesis_after_entry', 'genesis_get_comments_template' );

genesis();
