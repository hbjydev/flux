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