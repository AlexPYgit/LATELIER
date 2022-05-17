<?php
// block management acf

add_filter('block_categories', function($categories){
    $categories[]= array(
        'slug'=> 'theme',
        'title'=> 'block theme test',
        'icon'=> null,
    );
    return $categories;
});



if(function_exists('acf_register_block_type')){
    add_action('acf/init', function(){
        acf_register_block_type(
            array(
            'name'=> 'hero_home',
            'title'=>"header front page",
            'category'=> 'theme',
            'render_template'=> 'acf_blocks/hero_home.php'
            ));
    });

    add_action('acf/init', function(){
            acf_register_block_type(
                array(
                'name'=> 'coach',
                'title'=>"Coach",
                'category'=> 'theme',
                'render_template'=> 'acf_blocks/card-coach-block.php'
                ));
        });

    add_action('acf/init', function(){
        acf_register_block_type(
            array(
            'name'=> 'students-block',
            'title'=>"student block",
            'category'=> 'theme',
            'render_template'=> 'acf_blocks/students-block.php'
            ));
    });

    add_action('acf/init', function(){
        acf_register_block_type(
            array(
            'name'=> 'slider',
            'title'=>"Slider",
            'category'=> 'theme',
            'render_template'=> 'acf_blocks/slider.php'
            ));
    });

    add_action('acf/init', function(){
        acf_register_block_type(
            array(
            'name'=> 'title-page',
            'title'=>"Title page",
            'category'=> 'theme',
            'render_template'=> 'acf_blocks/title-page.php'
            ));
    });

    add_action('acf/init', function(){
        acf_register_block_type(
            array(
            'name'=> 'feature-and-courses',
            'title'=>"feature and courses",
            'category'=> 'theme',
            'render_template'=> 'acf_blocks/feature-and-courses.php'
            ));
    });

    add_action('acf/init', function(){
        acf_register_block_type(
            array(
            'name'=> 'logo_block',
            'title'=>"Logo block",
            'category'=> 'theme',
            'render_template'=> 'acf_blocks/acf-logo-block.php'
            ));
    });
   
}