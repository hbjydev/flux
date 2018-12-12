<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	  <meta name="viewport" content="width=device-width">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <meta name="application-name" content="<?php bloginfo( 'title' ); ?>">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="main_navigation" class="clearfix" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/pipes.png'; ?>)">
      <a href="<?php echo site_url(); ?>" class="name"><?php bloginfo('title'); ?></a>
      <button class="toggle-button"><i class="fa fa-bars"></i></button>
      <nav class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header_nav' ) ); ?>
      </nav>
    </header>
