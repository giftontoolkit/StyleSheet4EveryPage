<?php
// Enqueue Styles using style.css located in theme directory
function myTM_enqueue_assets_css() {
    // Enqueue style.css
    wp_enqueue_style('myTM-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'myTM_enqueue_assets_css');
?>