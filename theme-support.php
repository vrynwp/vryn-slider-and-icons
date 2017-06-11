<?php
/*
Plugin Name: Font Awesome and Owl Carousel Scripts
Plugin URI:  https://divithemedesigner.com/
Description: It is support plugin that provides CSS and JS files of FontAwesome and Carousel Slider
Version:     1.0.0
Author:      Vijaya Rajeshkannan MJ
Author URI:  http://divithemedesigner/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // disable direct access
}
 

// Carousel Slider file include and FontAwesome
function theme_support_scripts() {
	
	// FontAwesome include
	wp_enqueue_style( 'fontawesome-style', plugins_url( 'font-awesome/css/font-awesome.min.css', __FILE__), false, '4.7.5', false );
    
    // Owl Slider js include      
    wp_enqueue_script( 'theme-support-script', plugins_url( 'owl-carousel/owl.carousel.min.js', __FILE__), false, '4.7.5', true);
    
    // Owl Slider css include
    wp_enqueue_style( 'owl-slider-main-style', plugins_url( 'owl-carousel/assets/owl.carousel.min.css', __FILE__), false, '4.7.5', false );
    wp_enqueue_style( 'owl-slider-theme-style', plugins_url( 'owl-carousel/assets/owl.theme.default.min.css', __FILE__), false, '1.0.0', false );

}
add_action( 'wp_enqueue_scripts', 'theme_support_scripts' );