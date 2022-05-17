<?php

// Menu acf block

function test_theme_menu_acf_block( $items, $args ) {
	
	// get menu
	$menu = wp_get_nav_menu_object($args->menu);
	
	// modify primary only
	if( $args->theme_location == 'header' ) {
		
		// vars
        $bottom_start = get_field('bottom_start',$menu);
		$color_bottom = get_field('color_bottom', $menu);
		
		// prepend logo
        $html_bottom = '<li class="nav-item"><a style="color:white;font-weight:500;" class="px-3 py-2 btn btn-'.$color_bottom.'" aria-current="page" href="#">' .$bottom_start. '</a></li>';
				
		// append html
		$items = $items . $html_bottom ;
	}
	// return
	return $items;
}
add_filter('wp_nav_menu_items', 'test_theme_menu_acf_block', 20, 2);