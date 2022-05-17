<?php

// Menu acf block

function test_theme_menu_acf_block( $items, $args ) {
	
	// get menu
	$menu = wp_get_nav_menu_object($args->menu);
	
	// modify primary only
	if( $args->theme_location == 'header' ) {
		
		// vars
        $button_start = get_field('button_start',$menu);
		$color_button = get_field('color_button', $menu);
		
		// prepend logo
        $html_button = '<li class="nav-item"><a style="color:white;font-weight:500;" class="px-3 py-2 btn btn-'.$color_button.'" aria-current="page" href="#">' .$button_start. '</a></li>';
				
		// append html
		$items = $items . $html_button;
	}
	// return
	return $items;
}
add_filter('wp_nav_menu_items', 'test_theme_menu_acf_block', 20, 2);