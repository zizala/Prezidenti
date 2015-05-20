<?php
// Create Nav Menu
if(function_exists ('register_nav_menus')) {
	register_nav_menus ( array( 'primary' => 'Header Navigation'));	
}
if(function_exists ('add_theme_support')) {
	add_theme_support('post-thumbnails');
}
if(function_exists ('add_image_size')) {
	add_image_size('post', 810, false);
	add_image_size('post-index', 358, 198, true);
	add_image_size('sluzby-nahled', 800);
	
}
?>
