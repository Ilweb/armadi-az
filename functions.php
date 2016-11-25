<?php

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
    load_theme_textdomain('armadiaz', get_template_directory() . '/languages');
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'woocommerce' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 405, 810 );
	
	
	
	register_nav_menus(array(
		'primary' => __('Primary menu', 'armadiaz'),
		'secondary'=>__('Secondary menu', 'armadiaz'),
		'footer' => __('Footer menu', 'armadiaz')
	));

}



?>