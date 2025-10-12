# Message Hook Customizer

**Contributors:** justchill
**Donate link:** https://example.com/
**Tags:** custom message, hook, css, customizer
**Requires at least:** 5.0
**Tested up to:** 6.4
**Stable tag:** 1.0
**License:** GPLv2 or later
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html

A simple but powerful plugin that allows you to inject custom messages and CSS into any action hook on your WordPress site.

## Description

Message Hook Customizer provides an easy-to-use interface for adding custom content and styles to your website without editing theme files. You can display messages, banners, or any other content at specific points in your site's layout, and style it with your own CSS.

### Key Features:

*   **Display Custom Messages:** Add any text or HTML content to your site.
*   **Flexible Placement:** Choose from any WordPress action hook to control where your message appears.
*   **Custom Styling:** Apply your own CSS to style the message exactly as you want.
*   **User-Friendly Interface:** A simple settings page integrated into the WordPress admin area.

## Installation

1.  Upload the `message-hook-customizer` folder to the `/wp-content/plugins/` directory.
2.  Activate the plugin through the 'Plugins' menu in WordPress.
3.  Navigate to **Settings > Message Hook Customizer** to configure the plugin.

## How to Use

1.  **Activate the plugin:** In your WordPress admin dashboard, go to **Plugins**, find "Message Hook Customizer," and click **Activate**.
2.  **Configure the settings:**
    *   Go to **Settings > Message Hook Customizer**.
    *   You will find three fields:
        *   **Hook Name:** Enter the name of the WordPress action hook where you want to display your message. For example, `wp_footer` will display the message in the footer of your site.
        *   **Message to Display:** Enter the content of your message. You can use HTML for formatting, like adding links, images, or divs with classes.
        *   **Additional CSS:** Enter any custom CSS to style your message. You can target the elements you added in the message field.
3.  **Save Changes:** Click the "Save Changes" button.

### Example: Adding a Welcome Banner

Let's say you want to add a welcome banner at the top of your posts.

1.  **Hook Name:** You could use a hook like `the_content` or another hook provided by your theme. Let's use `the_content` for this example.
2.  **Message to Display:**
    ```html
    <div class="welcome-banner">
      <h3>Welcome to our site!</h3>
      <p>We're glad you're here. Enjoy your reading!</p>
    </div>
    ```
3.  **Additional CSS:**
    ```css
    .welcome-banner {
      background-color: #f0f8ff;
      border-left: 5px solid #2196F3;
      padding: 20px;
      margin-bottom: 20px;
    }
    .welcome-banner h3 {
      margin-top: 0;
      color: #2196F3;
    }
    ```
4.  **Save Changes.** Now, the welcome banner will appear at the beginning of your post content, styled with the CSS you provided.

## Use Cases

*   **Promotional Banners:** Announce a sale or special offer.
*   **Alerts and Notifications:** Inform users about important updates or maintenance.
*   **Call to Actions:** Add a newsletter signup form or a link to your social media.
*   **Advertisements:** Insert ad code from services like Google AdSense.
*   **Tracking Scripts:** Add tracking pixels or analytics code to specific pages.

## Frequently Asked Questions

*   **How do I find the right hook name?**
    You can find a list of common WordPress hooks in the [WordPress Developer documentation](https://developer.wordpress.org/hooks/). Many themes and plugins also provide their own custom hooks.

*   **Can I use HTML in the message?**
    Yes, you can use any HTML in the message field.

*   **Where is the CSS applied?**
    The CSS is added to the `<head>` section of your website, so it can style any element on the page.

## Screenshots

1.  The settings page in the WordPress admin area.

## Changelog

### 1.0
*   Initial release.
