<?php 

require_once get_template_directory(). '/menu-walker.php';


function eubluecard_post_link_attributes($output) {
    return 'class="btn btn-outline-primary"';
}
add_filter('previous_posts_link_attributes', 'eubluecard_post_link_attributes');
add_filter('next_posts_link_attributes', 'eubluecard_post_link_attributes');

function eubluecard_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
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
        'footer' => 'Footer Menu',
        'country' => 'Country Menu'
    ];

    register_nav_menus($locations);
}
add_action('init', 'eubluecard_menus');


function eubluecard_global_vars() {
    global $eu_blue_card_env;
    $eu_blue_card_env = [
        'custom_menu_walker' => new custom_walker_nav_menu()
    ];
}
add_action('parse_query', 'eubluecard_global_vars');
