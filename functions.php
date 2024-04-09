<?php

function pga_supports () {
    add_theme_support('post-thumbnails');
    // add_theme_support( 'title-tag' );
    // add_theme_support( 'custom-logo', array(
    //     'height' => 480,
    //     'width'  => 720,
    // ) );
    
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

// Add the style.css stylesheet
function pga_register_assets () {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script(
        'script', 
        get_parent_theme_file_uri('script.js'), 
        array(),'1.0.0', 
        array('strategy'  => 'defer',)
    );
}

add_action( 'after_setup_theme', 'pga_supports');
add_action('wp_enqueue_scripts', 'pga_register_assets');