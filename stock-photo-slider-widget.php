<?php
/**
 * Plugin Name: Stock Photo Slider Widget
 * Plugin URI: https://inventorypresser.com
 * Description: A slider widget that comes with automobile stock photography.
 * Version: 1.0.1
 * Author: John Norton, Corey Salzano
 * Author URI: https://profiles.wordpress.org/salzano
 * Text Domain: inventory-presser-sps
 * Domain Path: /languages
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Stock_Photo_Slider_Widget_Driver{

	function hooks() {
		include_once( 'includes/class-widget-stock-photo-slider.php' );
		add_action( 'widgets_init', array( $this, 'register_widget' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts'), 11 );
	}

	function load_scripts() {
		wp_enqueue_script( 'flexslider' );
		wp_enqueue_script( 'invp-flexslider' );
		wp_enqueue_style( 'flexslider' );
		wp_enqueue_style( 'invp-flexslider' );

		//This script starts the slideshow
		wp_add_inline_script( 'flexslider',
			"jQuery(document).ready(function() {
				jQuery('.flexslider.invp-sps').flexslider({
					animation: 'slide',
					animationSpeed: 300,
					controlNav: false,
					directionNav: false,
					prevText: '',
					nextText: '',
					slideshow: true,
				});
			});"
		);
	}

	function register_widget() {
		register_widget( 'Stock_Photo_Slider_Widget' );
	}
}
$sps_23048234234 = new Stock_Photo_Slider_Widget_Driver();
$sps_23048234234->hooks();
