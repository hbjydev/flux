<?php

function menureg() {
  register_nav_menus(
    array(
      'header_nav' => __('Main Navigation'),
      'social_nav' => __('Social Icons (use font-awesome syntax)')
    )
  );
}
add_action( 'init', 'menureg' );

function widgetsInit() {

	register_sidebar( array(
		'name'          => 'GitHub Projects',
    'id'            => 'github',
    'before_title'  => '<h2>',
    'after_title'   => '</h2><hr>'
	) );

}
add_action( 'widgets_init', 'widgetsInit' );

function scriptsAndStyles() {

  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'buttonHandler', get_stylesheet_directory_uri() . '/assets/button.js', array('jquery') );

}
add_action( 'wp_enqueue_scripts', 'scriptsAndStyles' );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
