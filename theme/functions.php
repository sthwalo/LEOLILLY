<?php
function leolilly_enqueue_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    // Enqueue custom JavaScript (if needed)
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'leolilly_enqueue_scripts');