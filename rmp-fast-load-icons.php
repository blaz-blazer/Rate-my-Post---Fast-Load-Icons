<?php

/**
 * @wordpress-plugin
 * Plugin Name: 	  	Rate my Post - Fast Load Icons
 * Description:       Loads only the necessary FontAwesome icons for the plugin. If you are using this plugin, enable Do not load FontAwesome in Rate my Post settings. 
 * Version:           1.0.0
 * Author:            Blaz K.
 * Author URI:        https://profiles.wordpress.org/blazk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

// Enqueue mini style
function rmp_mini_fonts() {
  wp_enqueue_style( 'rmp-mini-fonts', plugins_url( '/fast-load-icons.css', __FILE__ ) );
 }

 add_action( 'wp_enqueue_scripts', 'rmp_mini_fonts' );
