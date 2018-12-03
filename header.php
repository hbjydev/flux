<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	  <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('title'); ?></title>
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#333333">
    <meta name="apple-mobile-web-app-title" content="Hayden Young">
    <meta name="application-name" content="Hayden Young">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body>
    <header id="main_navigation" class="clearfix">
      <a href="<?php echo site_url(); ?>" class="name"><?php bloginfo('title'); ?></a>
      <nav class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header_nav' ) ); ?>
      </nav>
    </header>
