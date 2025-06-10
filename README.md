# Elementor Query String Dynamic Tag

![Plugin Version](https://img.shields.io/badge/version-1.0-blue.svg) ![WordPress](https://img.shields.io/badge/WordPress-6.0%2B-blue.svg) ![PHP](https://img.shields.io/badge/PHP-8.0%2B-blue.svg) ![License](https://img.shields.io/badge/license-GPLv2-green.svg)

A lightweight WordPress plugin that adds a custom dynamic tag to Elementor Pro for retrieving query string parameters, optimized for Gravity Forms data integration.

---

## Overview

The **Elementor Query String Dynamic Tag** plugin enhances Elementor Pro by providing a custom dynamic tag that retrieves query string parameters from the URL and displays them in Elementor widgets. This is particularly useful for Gravity Forms users who pass form data (e.g., a user’s first name) via query strings during redirect confirmations. The plugin ensures secure output with sanitization and integrates seamlessly with Elementor’s dynamic tags system.

Developed by [WP Pro A to Z](https://wpproatoz.com), this plugin is ideal for WordPress administrators seeking to create dynamic, personalized confirmation pages.

---

## Features

- **Custom Dynamic Tag**: Adds a "Query String" dynamic tag under Elementor’s "Request" group.
- **Query String Retrieval**: Displays any query string parameter (e.g., `first_name` from `?first_name=Alice`) in Elementor widgets like Heading or Text Editor.
- **Gravity Forms Integration**: Optimized for Gravity Forms redirect confirmations with merge tags (e.g., `{Name (First):1.3}`).
- **Security**: Sanitizes output using `sanitize_text_field()` to prevent XSS vulnerabilities.
- **User-Friendly**: Simple configuration via Elementor’s dynamic tag interface.
- **Dependency**: Requires Elementor Pro for dynamic tags support.

---

## Installation

1. **Download**: Grab the latest release from the [Releases](https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag/releases) page.
2. **Upload**: In WordPress admin, go to `Plugins > Add New > Upload Plugin`, and upload the `.zip` file.
3. **Activate**: Activate via the `Plugins` menu.
4. **Verify Dependency**: Ensure Elementor Pro is installed and active.
5. **Configure**: Set up Gravity Forms and Elementor as described below.

Alternatively, clone this repository into your `/wp-content/plugins/` directory and activate it:
```bash
git clone https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag.git elementor-query-string
cd elementor-query-string
```

---

## Requirements

- **WordPress**: 6.0 or higher
- **PHP**: 8.0 or higher
- **Elementor Pro**: Active installation
- **Gravity Forms**: Optional, for query string integration

---

## Configuration

### Gravity Forms Setup
- **Enable Redirect Confirmation**:
  - Navigate to your Gravity Form’s `Settings > Confirmations`.
  - Create or edit a confirmation with Type set to "Redirect".
  - Set the redirect URL (e.g., `https://example.com/thank-you/`).
  - Check "Pass Field Data Via Query String".
  - Add query string parameters using merge tags (e.g., `first_name={Name (First):1.3}`).
  - Save the confirmation.

### Elementor Setup
- **Create Confirmation Page**:
  - Edit your confirmation page in Elementor (e.g., `/thank-you/`).
  - Add a widget (e.g., Heading, Text Editor) where you want to display the query string data.
  - Click the Dynamic Tags icon in the widget’s content field.
  - Select "Query String" from the "Request" group.
  - Enter the query parameter name (e.g., `first_name`) in the tag settings.
  - Save and publish the page.

---

## Usage

1. Configure a Gravity Form to redirect to an Elementor-built page with a query string (e.g., `first_name={Name (First):1.3}`).
2. In Elementor, use the "Query String" dynamic tag in a widget to display the parameter (e.g., `first_name`).
3. Test by submitting the form and verifying the output on the confirmation page.

### Example
- **Gravity Forms Query String**: `first_name={Name (First):1.3}`
- **Redirect URL**: `https://example.com/thank-you/?first_name=Alice`
- **Elementor Output**: A Heading widget displays “Thank You, Alice!”

---

## Testing

- **Query String Display**:
  - Submit a Gravity Form with a sample First Name (e.g., “Alice”).
  - Verify the redirect URL (e.g., `https://example.com/thank-you/?first_name=Alice`).
  - Check that the Elementor widget displays the correct value (e.g., “Alice”).
- **Special Characters**:
  - Test with names containing spaces or special characters (e.g., “Mary Jane” or “O’Connor”).
  - Ensure Gravity Forms URL-encodes values (e.g., `Mary%20Jane`) and Elementor displays them correctly.
- **Security**:
  - Test with malicious input (e.g., `<script>alert('xss')</script>`).
  - Confirm the output is sanitized (e.g., displays as plain text).

Enable debugging in `wp-config.php`:
```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
```
Check `wp-content/debug.log` for any plugin-related errors.

---

## Support

Reach out at [support@wpproatoz.com](mailto:support@wpproatoz.com) or open an issue on [GitHub](https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag).

---

## Credits

- **Developed by**: [WP Pro A to Z](https://wpproatoz.com)
- **Contributors**: Grok (AI assistance for documentation and code structure)

---

## Contributing

Fork the repo, submit issues, or create pull requests at [github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag](https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag).

---

## License

Licensed under [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html).

---

## Demo

Check out the plugin in action at [WPProAtoZ.com](https://wpproatoz.com/plugins).

---

## Changelog

### Version 1.0
- Initial release with "Query String" dynamic tag for Elementor Pro.
- Supports Gravity Forms query string integration.
- Includes output sanitization for security.
