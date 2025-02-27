<?php
// Enqueue Styles using style.css located in theme directory
function gifton_enqueue_assets_css() {
    // Enqueue style.css
    wp_enqueue_style('gifton-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'gifton_enqueue_assets_css');

?>