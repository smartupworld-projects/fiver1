<?php 


function learningWordpressRes(){
	wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','learningWordpressRes');

// Navigation Menu

register_nav_menus(array(
	'primary' => 'Primary Menu',
	'footer'  => 'Footer Menu',
	));

// Get top ancestor
function get_top_ancestor_id(){
	global $post;
	if($post->post_parent){
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];

	}
	return $post->ID;
}