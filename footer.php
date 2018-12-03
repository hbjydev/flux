<footer id="main_footer" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/pipes.png'; ?>)">
  <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('title'); ?></p>
  <nav>
    <?php wp_nav_menu( array( 'theme_location' => 'social_nav' ) ); ?>
  </nav>
  <?php wp_footer(); ?>
</footer>
</body>
</html>
