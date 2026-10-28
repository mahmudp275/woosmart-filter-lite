<?php
/**
 * Plugin Name: WooSmart Filter Lite
 * Description: AJAX WooCommerce product filtering with shortcode and Elementor widget.
 * Version: 1.0.0
 * Requires Plugins: woocommerce
 * Requires PHP: 7.4
 * Author: Mahmud
 * License: GPL-2.0-or-later
 * Text Domain: woosmart-filter-lite
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
define( 'WSFL_VER', '1.0.0' );
define( 'WSFL_URL', plugin_dir_url( __FILE__ ) );
require_once __DIR__ . '/includes/class-woosmart-filter.php';
add_action( 'plugins_loaded', function () {
    if ( ! class_exists( 'WooCommerce' ) ) {
        add_action( 'admin_notices', function () { echo '<div class="notice notice-warning"><p>' . esc_html__( 'WooSmart Filter Lite requires WooCommerce to be active.', 'woosmart-filter-lite' ) . '</p></div>'; } );
        return;
    }
    WSFL_Filter::init();
});
add_action( 'elementor/widgets/register', function ( $manager ) {
    if ( ! class_exists( 'WooCommerce' ) || ! class_exists( '\\Elementor\\Widget_Base' ) ) { return; }
    require_once __DIR__ . '/includes/class-elementor-widget.php';
    $manager->register( new WSFL_Elementor_Widget() );
});
