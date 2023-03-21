<?php 

add_theme_support( 'custom-logo');
add_theme_support( 'title-tag' );

function mrp_enqueue_styles() {

    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css' );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ) , '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'mrp_enqueue_styles' );



if ( ! function_exists( 'plugin_register_nav_menu' ) ) {

	function plugin_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'mrp' ),
		) );
	}
	add_action( 'after_setup_theme', 'plugin_register_nav_menu');
}