<?php
function enqueue_parent_styles() {
  wp_register_style('uplands-style',  get_stylesheet_directory_uri() .'assets/css/bundle.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

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

?>