<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	  <meta name="viewport" content="width=device-width">
    <title>Hayden Young</title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  </head>
  <body>
    <header id="main_navigation" class="clearfix">
      <a href="<?php echo site_url(); ?>" class="name"><?php bloginfo('title'); ?></a>
      <nav class="main-nav">
        <?php wp_nav_menu( array( 'primary' => 'main_nav' ) ); ?>
      </nav>
    </header>
