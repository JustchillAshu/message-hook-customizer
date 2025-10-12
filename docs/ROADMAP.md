# Plugin Roadmap: Message Hook Customizer

This document outlines the planned future development for the Message Hook Customizer plugin. Our goal is to expand its functionality while maintaining its ease of use.

## Development Timeline

We plan to release new features in two-month cycles. The following is a prospective timeline and is subject to change based on user feedback and development priorities.

### Phase 1: Enhanced Content & Display Options (Next 2 Months)

*   **Shortcode Support:**
    *   **Feature:** Introduce a shortcode (e.g., `[mhc_message]`) that allows users to embed their custom message directly within post or page content, offering more granular control over placement.
    *   **Goal:** Provide a more flexible alternative to action hooks for content-area placements.

*   **Basic Conditional Display:**
    *   **Feature:** Add simple checkboxes to the settings page to control message visibility based on post type (e.g., show only on `posts`, only on `pages`, or on all custom post types).
    *   **Goal:** Allow users to target their messages more effectively without needing to write custom PHP.

### Phase 2: Advanced Targeting & UI Improvements (Months 3-4)

*   **User Role Targeting:**
    *   **Feature:** Implement settings to display messages exclusively to certain user roles (e.g., show a welcome message to logged-in users or a special notice for administrators).
    *   **Goal:** Enable personalized and context-aware communication.

*   **Upgraded Admin Interface:**
    *   **Feature:** Replace the standard textareas for the message and CSS fields with a proper code editor (e.g., CodeMirror) featuring syntax highlighting and line numbers.
    *   **Goal:** Improve the user experience for writing and managing HTML and CSS.

### Phase 3: Multiple Messages & Widget Support (Months 5-6)

*   **Manage Multiple Messages:**
    *   **Feature:** Overhaul the admin interface to allow users to create, save, and manage multiple independent messages. Each message will have its own set of rules (hook, conditions, content, and CSS).
    *   **Goal:** Transform the plugin from a single-message tool into a comprehensive content injection manager.

*   **Widget Support:**
    *   **Feature:** Introduce a "Custom Message" widget that can be added to any widgetized area of a theme (like sidebars or footers) via the WordPress Customizer or Widgets screen.
    *   **Goal:** Provide a simple, drag-and-drop method for placing custom messages.

## Future Ideas (Beyond 6 Months)

*   **A/B Testing:** Allow users to create multiple versions of a message to see which one performs better.
*   **Analytics:** Track impressions and clicks on messages.
*   **Pre-built Templates:** Offer a library of pre-designed templates for common use cases like banners, pop-ups, and alerts.
