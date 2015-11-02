<?php

/**
 * Beaver Builder Templates for Genesis
 *
 * @package           BB_Templates_Genesis
 * @author            Crowd Favorite, Carrie Dils
 * @license           GPL-2.0+
 * @link              http://www.crowdfavorite.com
 * @copyright         2015 Crowd Favorite
 *
 * Plugin Name:       Beaver Builder Templates for Genesis
 * Plugin URI:        https://github.com/crowdfavorite/bb-templates-genesis
 * Description:       Provides custom page templates for use with Beaver Builder plugin
 * Version:           1.0.0
 * Author:            Crowd Favorite, Carrie Dils
 * Author URI:        http://www.carriedils.com
 * Text Domain:       bb-templates-genesis
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/crowdfavorite/bb-templates-genesis
 * GitHub Branch:     master
 */

/**
 * Exit if accessed directly
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BB_TEMPLATES_GENESIS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Don't allow plugin activation without Beaver Builder.
 *
 * Checks to see if `FLBuilder` class from Beaver Builder is available. If not, 
 * assume that Beaver Builder isn't activated and show an error on activation attempt.
  * 
 * @since  1.0.0
 */
if ( ! class_exists( 'FLBuilder' ) ) {
   wp_die( sprintf( __( 'Sorry, you can\'t activate unless you have installed and activated Beaver Builder.', 'bb-templates-genesis' ) ) );
}


add_filter( 'template_include', 'bb_templates_genesis_add_beaver_builder_templates', 99 );
/**
 * Use stripped down page templates to better accommodate Beaver Builder.
 * 
 * @since  1.0.0
 * @param string $template The current template to be loaded.
 * @return string
 * 
 */
function bb_templates_genesis_add_beaver_builder_templates( $template ) {

	if ( is_page() ) {
		return BB_TEMPLATES_GENESIS_PLUGIN_DIR . 'templates/page_beaver.php';
	}
	elseif ( is_single() ) {
		return BB_TEMPLATES_GENESIS_PLUGIN_DIR . 'templates/single_beaver.php';
	}

	return $template;
}
