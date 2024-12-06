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

// Kirki Customizer Integration
if ( class_exists( 'Kirki' ) ) {
    Kirki::add_config( 'customizekirki_config', array(
        'capability'  => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ) );

    Kirki::add_panel( 'custom_panel', array(
        'priority'    => 10,
        'title'       => __( 'Theme Customization', 'customizekirki' ),
        'description' => __( 'Customize your theme settings.', 'customizekirki' ),
    ) );

    Kirki::add_section( 'custom_colors', array(
        'title'    => __( 'Colors', 'customizekirki' ),
        'panel'    => 'custom_panel',
        'priority' => 160,
    ) );

    Kirki::add_field( 'customizekirki_config', [
        'type'        => 'color',
        'settings'    => 'primary_color',
        'label'       => __( 'Primary Color', 'customizekirki' ),
        'section'     => 'custom_colors',
        'default'     => '#ff0000',
        'transport'   => 'refresh',
        'output'      => [
            [
                'element'  => 'body, a',
                'property' => 'color',
            ],
        ],
    ] );
}
