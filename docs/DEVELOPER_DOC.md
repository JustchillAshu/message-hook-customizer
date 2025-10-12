# Developer Documentation: Message Hook Customizer

This document provides a technical overview of the Message Hook Customizer plugin for developers who want to understand, customize, or extend its functionality.

## Plugin Architecture

The plugin is built with an object-oriented approach, separating the frontend display logic from the backend admin settings.

### File Structure

```
message-hook-customizer/
├── docs/
│   └── HOW_TO_USE.md
│   └── DEVELOPER_DOC.md
├── includes/
│   └── admin-settings-page.php
├── message-hook-customizer.php
├── README.md
└── readme.txt
```

*   `message-hook-customizer.php`: The main plugin file. It initializes the plugin, loads dependencies, and handles the frontend logic.
*   `includes/admin-settings-page.php`: This file contains the code for the admin settings page, including rendering the fields and saving the options.

## Core Classes

### `MHC_Message_Hook_Customizer`

*   **Location:** `message-hook-customizer.php`
*   **Role:** This is the main class that handles the public-facing functionality of the plugin.
*   **Key Methods:**
    *   `__construct()`: Hooks the main plugin actions into WordPress (`init`, `wp_enqueue_scripts`, `plugins_loaded`).
    *   `load_hooks()`: Retrieves the user-defined hook name from the database and attaches the `display_message` method to it.
    *   `display_message()`: Retrieves the custom message from the database and echoes it on the frontend.
    *   `enqueue_styles()`: Retrieves the custom CSS and injects it as an inline style in the site's header.

### `MHC_Admin_Settings_Page`

*   **Location:** `includes/admin-settings-page.php`
*   **Role:** This class manages the plugin's settings page in the WordPress admin area.
*   **Key Methods:**
    *   `__construct()`: Hooks the admin page creation and settings registration into WordPress (`admin_menu`, `admin_init`).
    *   `add_settings_page()`: Creates the menu item under the "Settings" menu.
    *   `register_settings()`: Registers the settings with the WordPress Settings API, allowing them to be saved to the `wp_options` table.
    *   `render_settings_page()`: Renders the HTML for the settings page form.

## Database Options

The plugin stores its data in the `wp_options` table. The following options are used:

*   `mhc_hook_name`: (string) The name of the action hook to attach the message to.
*   `mhc_message_to_display`: (string) The message content to be displayed. Can contain HTML.
*   `mhc_additional_css`: (string) The custom CSS to be added to the site.

## Hooks and Filters

The plugin primarily uses action hooks to execute its functionality.

### Actions Used

*   `plugins_loaded`: The main entry point for the plugin. Used to initialize the `MHC_Message_Hook_Customizer` class.
*   `init`: Used to call the `load_hooks` method, which sets up the custom message display.
*   `wp_enqueue_scripts`: Used to enqueue the custom CSS.
*   `admin_menu`: Used to add the settings page to the admin menu.
*   `admin_init`: Used to register the plugin's settings.

## Potential for Extension

*   **More field types:** You could extend the plugin to allow for different types of content, such as images or pre-defined templates.
*   **Conditional Logic:** Add options to only display the message on certain pages, for certain user roles, or based on other conditions.
*   **Shortcodes:** Implement a shortcode that allows users to place the message directly in their content, in addition to using hooks.
*   **Widgets:** Create a widget that allows the message to be placed in sidebars or other widgetized areas.
