<?php
function menureg() {
  register_nav_menu('main_nav',__( 'Main Navigation' ));
  register_nav_menu('social',__('Social Links Menu'));
  register_nav_menu('home_nav',__('Homepage Links List'));
}
add_action( 'init', 'menureg' );

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home textbox',
		'id'            => 'home_left'
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
