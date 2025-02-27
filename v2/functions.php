<?php
// Enqueue Styles using mys2.css located in theme directory
function gifton_enqueue_assets_css() {
    // Enqueue mys2.css
    wp_enqueue_style('gifton-mys2-style', get_template_directory_uri() . '/mys2.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'gifton_enqueue_assets_css');

?>