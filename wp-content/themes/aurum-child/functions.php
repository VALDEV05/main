<?php
/**
 *	Aurum WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */

// This function will enqueue custom.css of child theme, feel free to add yours
function aurum_enqueue_child_theme_scripts() {
	wp_enqueue_style( 'aurum-child', get_stylesheet_directory_uri() . '/custom-css/custom.css' );
}

add_action( 'wp_enqueue_scripts', 'aurum_enqueue_child_theme_scripts', 100 );


if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
        'page_title'    => 'Header Options Supply',
        'menu_title'    => 'Header Options',
        'menu_slug'     => 'header-options-supply',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Footer Options Supply',
        'menu_title'    => 'Footer Options',
        'menu_slug'     => 'footer-options-supply',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}