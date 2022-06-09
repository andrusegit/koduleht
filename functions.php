<?php

function my_style_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'my_style', get_template_directory_uri() . '/css/style.css' );
  }
  add_action('wp_enqueue_scripts', 'my_style_enqueue_styles');

	
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 200, 200, true );



function register_my_links_menu() {
  register_nav_menu('links-menu',__( 'Links Menu' ));
}
add_action( 'init', 'register_my_links_menu' );

/*
$args = array(
  'default-position-x'     => 'left',
  'default-position-y'     => 'top',
  'default-repeat'     => 'no-repeat',
  'default-color' => '4088d4',
  'default-image' => get_template_directory_uri() . '/img/bkground.jpg',
);
add_theme_support( 'custom-background', $args );
*/