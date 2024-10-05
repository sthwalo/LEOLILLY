<?php
// Enqueue styles and scripts
function leolilly_enqueue_styles() {
    wp_enqueue_style( 'leolilly-style', get_stylesheet_uri() );

    // Enqueue Google Fonts
    wp_enqueue_style( 'leolilly-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway|Ubuntu|Pacifico|Cutive+Mono|Source+Sans+Pro' );
    
    // Enqueue Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
    
    // Enqueue custom JavaScript
    wp_enqueue_script( 'leolilly-script', get_template_directory_uri() . '/js/script.js', array(), null, true );
}

// Elementor Support for Theme
function leolilly_setup_elementor() {
    // Add theme support for Elementor
    add_theme_support( 'elementor' );

    // Register navigation menu for dynamic menu management
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'leolilly' ),
    ));
}

// Call wp_nav_menu to dynamically add menus and allow rearranging in WP admin
function leolilly_add_wp_nav_menu() {
    wp_nav_menu( array(
        'theme_location' => 'primary', // Menu registered in functions.php
        'container' => false,          // Remove surrounding div
        'menu_class' => 'menu',        // Add a custom CSS class for the menu
        'fallback_cb' => false         // Remove fallback to pages if no menu is set
    ));
}

add_action( 'after_setup_theme', 'leolilly_setup_elementor' );
add_action( 'wp_enqueue_scripts', 'leolilly_enqueue_styles' );
?>