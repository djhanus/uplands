<?php

// load styles
function enqueue_parent_styles() {
  wp_register_style('uplands-style',  get_stylesheet_directory_uri() .'assets/css/bundle.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

// custom menus
function register_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __('Primary'),
      'footer-counties-1' => __('Footer - Counties 1'),
      'footer-counties-2' => __('Footer - Counties 2'),
      'footer-quicklinks' => __('Footer - Quick Links')
    )
  );
}
add_action('init', 'register_menus');

// add acf options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function create_posttypes() {
  register_post_type('videos',
    array (
      'labels' => array (
        'name' => __('Videos'),
        'singular_name' => __('Video')
      ),
      'supports' => array('title', 'editor'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'videos'),
    )
  );
}
add_action('init', 'create_posttypes');

?>

