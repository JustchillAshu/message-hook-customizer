<?php
/**
 * Plugin Name: Message Hook Customizer
 * Description: Adds a custom message on a user-defined hook and allows adding additional CSS through the backend.
 * Version: 1.0
 * Author: justchill
 * Text Domain: message-hook-customizer
 * Domain Path: /languages
 */

/**
 * Message Hook Customizer
 *
 * @package Message_Hook_Customizer
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'MHC_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

require_once MHC_PLUGIN_PATH . 'includes/admin-settings-page.php';

class MHC_Message_Hook_Customizer {

    public function __construct() {
        add_action( 'init', [ $this, 'load_hooks' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_styles' ] );
        add_action( 'plugins_loaded', [ $this, 'load_textdomain' ] );
    }

    public function load_textdomain() {
        load_plugin_textdomain( 'message-hook-customizer', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    }

    public function load_hooks() {
        $hook_name = get_option( 'mhc_hook_name' );
        if ( $hook_name ) {
            add_action( $hook_name, [ $this, 'display_message' ] );
        }
    }

    public function display_message() {
        $message = get_option( 'mhc_message_to_display' );
        if ( $message ) {
            echo wp_kses_post( nl2br( $message ) );
        }
    }

    public function enqueue_styles() {
        $additional_css = get_option( 'mhc_additional_css' );
        if ( $additional_css ) {
            wp_register_style( 'mhc-custom-style', false );
            wp_enqueue_style( 'mhc-custom-style' );
            wp_add_inline_style( 'mhc-custom-style', esc_html( $additional_css ) );
        }
    }
}

function mhc_run_plugin() {
    new MHC_Message_Hook_Customizer();
}
add_action( 'plugins_loaded', 'mhc_run_plugin' );
