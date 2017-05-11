<?php

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_action( 'init', 'create_post_type' );
 function create_post_type() {
     register_post_type( 'Custom Post',
         array(
             'labels' => array(
                 'name' => __( 'Custom Post' )
             ),
         'public' => true,
         'has_archive' => true,
   'supports'=>array('title','editor','thumbnail','custom-fields'),
         )
     );
 }

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}






