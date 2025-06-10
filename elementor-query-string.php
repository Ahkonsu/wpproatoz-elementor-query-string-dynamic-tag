<?php
/*
Plugin Name: Elementor Query String Dynamic Tag
Description: Adds a custom dynamic tag to Elementor for retrieving query string parameters, specifically for Gravity Forms data.
Version: 1.0
Author: WP Pro A to Z
Requires at least: 6.0
Requires PHP: 8.0
Author: WPProAtoZ.com | Grok
Author URI: https://wpproatoz.com
Update URI: https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag/releases
GitHub Plugin URI: https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag/releases
GitHub Branch: main
Text Domain: elementor-query-string
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

////***check for updates code

require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/Ahkonsu/wpproatoz-elementor-query-string-dynamic-tag/',
	__FILE__,
	'wpproatoz-elementor-query-string-dynamic-tag'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

//$myUpdateChecker->getVcsApi()->enableReleaseAssets();
 
 
//Optional: If you're using a private repository, specify the access token like this:
//$myUpdateChecker->setAuthentication('your-token-here');

/////////////////////
// Check if Elementor is active
if (did_action('elementor/loaded')) {
    // Register the custom dynamic tag
    add_action('elementor/dynamic_tags/register', function($dynamic_tags) {
        class Query_String_Tag extends \Elementor\Core\DynamicTags\Tag {
            public function get_name() {
                return 'query-string';
            }

            public function get_title() {
                return __('Query String', 'elementor-query-string');
            }

            public function get_group() {
                return 'request';
            }

            public function get_categories() {
                return [\Elementor\Modules\DynamicTags\Module::TEXT_CATEGORY];
            }

            protected function register_controls() {
                $this->add_control(
                    'query_param',
                    [
                        'label' => __('Query Parameter', 'elementor-query-string'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => 'first_name',
                    ]
                );
            }

            public function render() {
                $param = $this->get_settings('query_param');
                $value = isset($_GET[$param]) ? sanitize_text_field($_GET[$param]) : '';
                echo wp_kses_post($value);
            }
        }

        $dynamic_tags->register(new Query_String_Tag());
    });
}