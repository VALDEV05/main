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

add_action( 'wp_enqueue_scripts', 'aurum_enqueue_child_theme_scripts', 103 );


add_action('wp_enqueue_scripts', 'add_custom_javascript');
function add_custom_javascript()
{
    wp_enqueue_script(
        'custom', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '-child/js/custom.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

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