<?php
function menureg() {
  register_nav_menus(
    array(
      'header_nav' => __('Main Navigation'),
      'home_nav' => __('Homepage Links List'),
      'social_nav' => __('Social Icons (use font-awesome syntax)')
    )
  );
}
add_action( 'init', 'menureg' );

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home textbox',
		'id'            => 'home_left'
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function scriptsAndStyles() {

  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'buttonHandler', get_stylesheet_directory_uri() . '/assets/button.js', array('jquery') );

}
add_action( 'wp_enqueue_scripts', 'scriptsAndStyles' );

add_theme_support('post-thumbnails'); 