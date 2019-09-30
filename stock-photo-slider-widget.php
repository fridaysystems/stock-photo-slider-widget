<?php
defined( 'ABSPATH' ) or exit;
/**
 * Plugin Name: Stock Photo Slider Widget
 * Plugin URI: https://inventorypresser.com
 * Description: A slider widget that comes with automobile stock photography.
 * Version: 1.0.0
 * Author: John Norton, Corey Salzano
 * Author URI: https://profiles.wordpress.org/salzano
 * Text Domain: inventory-presser-sps
 * Domain Path: /languages
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

class Stock_Photo_Slider_Widget_Driver{

	function hooks() {
		include_once( 'includes/class-widget-stock-photo-slider.php' );
		add_action( 'widgets_init', array( $this, 'register_widget' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts'), 11 );
	}

	function load_scripts() {

		//is _dealer-flexslider already enqueued? is flexslider?
		$dealer_theme = wp_script_is( '_dealer-flexslider' );
		$otherwise_have = wp_script_is( 'flexslider' );
		if( ! $dealer_theme && ! $otherwise_have ) {
			wp_register_script( 'flexslider', plugins_url( '/assets/jquery.flexslider.min.js', __FILE__ ), array('jquery') );
			wp_enqueue_script( 'flexslider' );
			wp_add_inline_script( ( $dealer_theme ? '_dealer-flexslider' : 'flexslider' ), 'jQuery(document).ready( function() { jQuery(".flex-native").flexslider({ animation: "fade", controlNav: false, slideshow: true, animationSpeed: 300 }); });' );
		}

		//is invp-simple-listing-style already enqueued? is _dealer/style.css?
		if( ! wp_style_is( 'invp-simple-listing-style' ) && ! wp_style_is( '_dealer-base' ) ) {
			wp_enqueue_style( 'invp-sps', plugins_url('/assets/flexslider.css', __FILE__ ) );
		}
	}

	function register_widget() {
		register_widget( 'Stock_Photo_Slider_Widget' );
	}
}
$sps_23048234234 = new Stock_Photo_Slider_Widget_Driver();
$sps_23048234234->hooks();
