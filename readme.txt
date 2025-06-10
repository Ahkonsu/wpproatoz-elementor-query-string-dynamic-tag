=== Elementor Query String Dynamic Tag ===
Contributors: WPProAtoZ
Tags: elementor, gravity forms, dynamic tags, query string, wordpress
Requires at least: 6.0
Tested up to: 6.6
Stable tag: 1.0
Requires PHP: 8.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds a custom dynamic tag to Elementor for retrieving query string parameters, specifically for Gravity Forms data.

== Description ==
The Elementor Query String Dynamic Tag plugin extends Elementor Pro by adding a custom dynamic tag that allows you to display query string parameters on your Elementor-built pages. This is particularly useful for displaying data passed from Gravity Forms submissions via query strings, such as a user's first name or email.

**Key Features:**
- Registers a "Query String" dynamic tag in Elementor Pro under the "Request" group.
- Retrieves query string parameters (e.g., `first_name` from `?first_name=Alice`) and outputs them in Elementor widgets like Heading or Text Editor.
- Sanitizes output to prevent security issues like XSS.
- Designed for seamless integration with Gravity Forms redirect confirmations.

**Use Case:**
When a Gravity Form redirects to a confirmation page with query string parameters (e.g., `?first_name={Name (First):1.3}`), this plugin lets you display that data dynamically in Elementor.

**Requirements:**
- Elementor Pro (for dynamic tags).
- Gravity Forms (optional, for query string data).
- WordPress 6.0 or higher.
- PHP 8.0 or higher.

Developed by WP Pro A to Z (https://wpproatoz.com).

== Installation ==
1. Download the plugin from the GitHub repository: https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag/releases
2. Upload the `elementor-query-string` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Ensure Elementor Pro is installed and activated.
5. Configure your Gravity Form to pass field data via query string in the confirmation settings.
6. Use the "Query String" dynamic tag in Elementor widgets to display the data.

== Usage ==
1. In Gravity Forms, set up a redirect confirmation with a query string (e.g., `first_name={Name (First):1.3}`).
2. In Elementor, edit your confirmation page.
3. Add a Heading or Text Editor widget.
4. Insert the "Query String" dynamic tag (found under the "Request" group).
5. Specify the query parameter (e.g., `first_name`) in the tag settings.
6. Save and test by submitting the form.

== Frequently Asked Questions ==
= Does this require Elementor Pro? =
Yes, the dynamic tags feature is exclusive to Elementor Pro.

= Can it display any query string parameter? =
Yes, as long as the parameter is present in the URL (e.g., `?key=value`), you can specify the key in the dynamic tag settings.

= Is it secure? =
The plugin sanitizes query string data using `sanitize_text_field()` to prevent security vulnerabilities.

== Changelog ==
= 1.0 =
* Initial release.

== Upgrade Notice ==
= 1.0 =
Initial release. No upgrades available yet.

== Screenshots ==
1. Configuring the Query String dynamic tag in Elementor.
2. Gravity Forms confirmation settings with query string.

== Support ==
For support, visit https://wpproatoz.com or open an issue on GitHub: https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag