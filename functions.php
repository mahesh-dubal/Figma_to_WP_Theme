<?php 

add_theme_support( 'custom-logo');
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function mrp_enqueue_styles() {

    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css' );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ) , '1.0', true );
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'mrp_enqueue_styles' );




function custom_theme_setup() {
	register_nav_menus(array(
			'primary_menu' => __('Primary Menu', 'mrp')
			));
}
add_action( 'after_setup_theme', 'custom_theme_setup');
