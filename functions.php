<?php

function prolimpie_setup(){
    //Imagenes Destacadas
    add_theme_support('post-thumbnails');

    //Titulos para SEO
    add_theme_support( 'title-tag' );
}

add_action('after_setup_theme', 'prolimpie_setup');


function prolimpie_menus(){
    register_nav_menus(array(
        'menu-principal' =>  __('Menu Principal', 'prolimpie')
    ));
}

add_action('init', 'prolimpie_menus');

function prolimpie_scripts_styles(){
    //Adding style sheets
    wp_enqueue_style('normalize','https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(),'8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(),array('normalize'),'1.0.0');

    //add scripts
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '5.15.4', 'all');
    
    //Custom js
    $route_js = get_template_directory_uri() . '/js/app.js';

    wp_enqueue_script('mi-script', $route_js, array('jquery'), '1.0', true);


}

add_action('wp_enqueue_scripts','prolimpie_scripts_styles');