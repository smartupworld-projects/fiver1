<?php 

add_theme_support('custom-header',array(
    'default-image' => get_template_directory_uri().'/images/logo.png'
));

function oxfam_gwp(){
	wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','oxfam_gwp');


// Navigation Menu

function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );