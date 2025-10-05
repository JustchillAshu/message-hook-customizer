<?php
/**
 * Admin settings page for Message Hook Customizer.
 *
 * @package Message_Hook_Customizer
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class MHC_Admin_Settings_Page {

    public function __construct() {
        add_action( 'admin_menu', [ $this, 'add_settings_page' ] );
        add_action( 'admin_init', [ $this, 'register_settings' ] );
    }

    public function add_settings_page() {
        add_options_page(
            __( 'Message Hook Customizer', 'message-hook-customizer' ),
            __( 'Message Hook Customizer', 'message-hook-customizer' ),
            'manage_options',
            'mhc-settings',
            [ $this, 'render_settings_page' ]
        );
    }

    public function register_settings() {
        register_setting( 'mhc_settings_group', 'mhc_hook_name', 'sanitize_text_field' );
        register_setting( 'mhc_settings_group', 'mhc_message_to_display', 'wp_kses_post' );
        register_setting( 'mhc_settings_group', 'mhc_additional_css', 'sanitize_textarea_field' );
    }

    public function render_settings_page() {
        ?>
        <div class="wrap">
            <h1><?php echo esc_html__( 'Message Hook Customizer', 'message-hook-customizer' ); ?></h1>
            <form method="post" action="options.php">
                <?php
                settings_fields( 'mhc_settings_group' );
                do_settings_sections( 'mhc-settings' );
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }
}

function mhc_admin_settings_page() {
    new MHC_Admin_Settings_Page();
}
add_action( 'plugins_loaded', 'mhc_admin_settings_page' );

add_action( 'admin_init', function () {
    add_settings_section(
        'mhc_settings_section',
        __( 'Custom Message Settings', 'message-hook-customizer' ),
        null,
        'mhc-settings'
    );

    add_settings_field(
        'mhc_hook_name',
        __( 'Hook Name', 'message-hook-customizer' ),
        function () {
            $hook_name = get_option( 'mhc_hook_name' );
            echo '<input type="text" name="mhc_hook_name" value="' . esc_attr( $hook_name ) . '" class="regular-text">';
        },
        'mhc-settings',
        'mhc_settings_section'
    );

    add_settings_field(
        'mhc_message_to_display',
        __( 'Message to Display', 'message-hook-customizer' ),
        function () {
            $message = get_option( 'mhc_message_to_display' );
            echo '<textarea name="mhc_message_to_display" rows="5" cols="50" class="large-text">' . esc_textarea( $message ) . '</textarea>';
        },
        'mhc-settings',
        'mhc_settings_section'
    );

    add_settings_field(
        'mhc_additional_css',
        __( 'Additional CSS', 'message-hook-customizer' ),
        function () {
            $css = get_option( 'mhc_additional_css' );
            echo '<textarea name="mhc_additional_css" rows="5" cols="50" class="large-text">' . esc_textarea( $css ) . '</textarea>';
        },
        'mhc-settings',
        'mhc_settings_section'
    );
} );
