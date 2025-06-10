Elementor Query String Dynamic Tag
Plugin Name: Elementor Query String Dynamic TagDescription: Adds a custom dynamic tag to Elementor for retrieving query string parameters, specifically for Gravity Forms data.Version: 1.0Author: WP Pro A to Z | GrokAuthor URI: https://wpproatoz.comRequires at least: WordPress 6.0Requires PHP: 8.0Text Domain: elementor-query-stringGitHub Plugin URI: https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag/releasesGitHub Branch: mainUpdate URI: https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag/releases
Overview
This plugin enhances Elementor Pro by adding a custom dynamic tag that retrieves query string parameters from the URL and displays them in Elementor widgets. It’s particularly useful for displaying data passed from Gravity Forms submissions, such as a user’s first name (e.g., ?first_name=Alice).
Features

Adds a "Query String" dynamic tag under Elementor’s "Request" group.
Supports any query string parameter (e.g., first_name, email).
Sanitizes output for security using sanitize_text_field().
Ideal for Gravity Forms redirect confirmations.

Requirements

Elementor Pro (for dynamic tags).
Gravity Forms (optional, for query string integration).
WordPress 6.0 or higher.
PHP 8.0 or higher.

Installation

Download the plugin from GitHub releases.
Upload the elementor-query-string folder to /wp-content/plugins/.
Activate the plugin via the WordPress Plugins menu.
Ensure Elementor Pro is installed and active.
Configure Gravity Forms to pass query string data (e.g., first_name={Name (First):1.3}) in the confirmation settings.

Usage

In Gravity Forms, create a redirect confirmation with a query string (e.g., first_name={Name (First):1.3}).
In Elementor, edit your confirmation page.
Add a widget (e.g., Heading, Text Editor).
Insert the "Query String" dynamic tag from the "Request" group.
Set the query parameter (e.g., first_name) in the tag settings.
Save and test by submitting the form.

Example
Gravity Forms Query String: first_name={Name (First):1.3}Redirect URL: https://example.com/thank-you/?first_name=AliceElementor Output: A Heading widget displays “Thank You, Alice!”
Development

Text Domain: elementor-query-string
Source Code: GitHub Repository
Contributions are welcome! Submit pull requests or issues on GitHub.

Support

Website: https://wpproatoz.com
GitHub Issues: https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag

License
GPLv2 or later. See LICENSE.
Changelog
1.0

Initial release.

