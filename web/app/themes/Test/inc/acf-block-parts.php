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
            'title'=>"Entête de la page d'acceuil",
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
            'title'=>"Block étudient",
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
   
}