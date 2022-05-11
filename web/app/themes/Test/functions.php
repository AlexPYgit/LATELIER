<?php 


function test_support_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Menu de navigation');
    add_theme_support('custom-logo', array('height'=> 98, 'width'=> 164));

}

add_action('after_setup_theme', 'test_support_theme');

function test_register_style(){
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap_popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts', 'test_register_style');

function test_theme_menu_css_class($classes){
    $classes[] = "nav-item";
    return $classes;
}

add_filter('nav_menu_css_class', 'test_theme_menu_css_class');

function test_theme_menu_link($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_filter('nav_menu_link_attributes', 'test_theme_menu_link');



// Gestion des Block acf

add_filter('block_categories', function($categories){
    $categories[]= [
        'slug'=> 'theme',
        'title'=> 'block theme test',
        'icon'=> null,
    ];
    return $categories;
});



if(function_exists('acf_register_block_type')){
    add_action('acf/init', function(){
        acf_register_block_type([
            'name'=> 'hero_home',
            'title'=>"Entête de la page d'acceuil",
            'category'=> 'theme',
            'render_template'=> 'acf_blocks/hero_home.php'
        ]);
    });
}