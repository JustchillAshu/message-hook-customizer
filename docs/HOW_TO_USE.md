# How to Use Message Hook Customizer

This guide will walk you through the steps to configure and use the Message Hook Customizer plugin.

## Configuration

1.  **Activate the plugin:** In your WordPress admin dashboard, go to **Plugins**, find "Message Hook Customizer," and click **Activate**.
2.  **Navigate to the settings page:** Go to **Settings > Message Hook Customizer**.

## Settings Explained

On the settings page, you will find three fields:

*   **Hook Name:** This is the most important setting. It determines where your message will be displayed. You need to provide the name of a WordPress action hook. Common hooks include:
    *   `wp_head`:  Runs in the `<head>` section of the page.
    *   `wp_footer`: Runs just before the closing `</body>` tag.
    *   `the_content`: Filters the content of a post.
    *   Many themes and plugins also provide their own hooks.

*   **Message to Display:** This is the content that will be displayed. You can use plain text or HTML. This allows you to add formatted text, images, links, or even `<div>`s with specific classes for styling.

*   **Additional CSS:** This field allows you to add your own CSS to style the message. The CSS is added to the `<head>` of your website, so it can target any element on the page.

## Example: Adding a Welcome Banner

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

Here are a few ideas for how you can use this plugin:

*   **Promotional Banners:** Announce a sale or special offer.
*   **Alerts and Notifications:** Inform users about important updates or maintenance.
*   **Call to Actions:** Add a newsletter signup form or a link to your social media.
*   **Advertisements:** Insert ad code from services like Google AdSense.
*   **Tracking Scripts:** Add tracking pixels or analytics code to specific pages.
