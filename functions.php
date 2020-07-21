<?php 

function eubluecard_theme_support() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'eubluecard_theme_support');

function eubluecard_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('eubluecard-bootstrap', get_template_directory_uri(). "/assets/css/bootstrap.min.css", [], '4.3.1', 'all');

    wp_enqueue_style('eubluecard-style', get_template_directory_uri(). "/style.css", ['eubluecard-bootstrap'], $version , 'all');
}
add_action( 'wp_enqueue_scripts', 'eubluecard_register_styles' );

function eubluecard_menus() {
    $locations = [
        'primary' => 'Header Menu', 
        'footer' => 'Footer Menu'
    ];

    register_nav_menus($locations);
}
add_action('init', 'eubluecard_menus');