<?php 

include_once(get_template_directory().'/lib/init.php');

define('CHILD_THEME_NAME', 'Genesis GDKOB, Basic');
define('CHILD_THEME_URL', 'https://plugins.dev4press.com/gd-knowledge-base/' );
define('CHILD_THEME_VERSION', '3.0.1' );

add_theme_support('html5');
add_theme_support('genesis-accessibility');
add_theme_support('genesis-responsive-viewport');

add_action('wp_enqueue_scripts', 'genesis_gdkob_theme_scripts');
function genesis_gdkob_theme_scripts() {
    wp_enqueue_style('genesis-parent-css', get_template_directory_uri().'/style.css');
}
