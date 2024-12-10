<?php
// Theme setup
function customizekirki_theme_setup() {
    // Add theme support for title tag and post thumbnails
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'customizekirki' ),
    ) );
}
add_action( 'after_setup_theme', 'customizekirki_theme_setup' );

// Enqueue styles and scripts
function customizekirki_enqueue_assets() {
    wp_enqueue_style( 'customizekirki-style', get_stylesheet_uri() );
    wp_enqueue_script( 'customizekirki-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'customizekirki_enqueue_assets' );



//theme customize all 
include_once('inc/kirki-framwork.php');




// Kirki Customizer Integration
