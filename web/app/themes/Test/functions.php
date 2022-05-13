<?php 

require get_template_directory() . '/inc/acf-block-parts.php';

function test_support_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Menu de navigation');
    add_theme_support('custom-logo', array('height'=> 98, 'width'=> 164));

}

add_action('after_setup_theme', 'test_support_theme');

function test_theme_register_script(){
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap_popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js');
    wp_enqueue_script('autoCompleteJS','https://cdnjs.cloudflare.com/ajax/libs/tarekraafat-autocomplete.js/10.2.7/autoComplete.min.js');
    wp_enqueue_style('autoCompleteCSS','https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.02.min.css');
    wp_enqueue_script('test_theme_autoCompleteJS', get_template_directory_uri(). '/assets/autoCompleteJS/autoComplete.js');
}

add_action('wp_enqueue_scripts', 'test_theme_register_script');

function test_theme_CSS_style(){
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'test_theme_CSS_style');

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


