<?php query_posts( 'posts_per_page=3' ); ?>
<?php get_header(); ?>
<div class="wrapper wrapper_padding clearfix">
  <div class="col-1 about homepage_content">
    <h2>About</h2>
    <hr>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home_left') ) :

    endif; ?>
  </div>
  <div class="col-2 homepage_content">
    <h2>Stuff I've Written</h2>
    <hr>
    <?php
      if ( have_posts() ) {
      	while ( have_posts() ) {
      		the_post(); ?>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="date"><?php the_date(); ?></p>
      	<?php } // end while
      } // end if
      ?>
  </div>
  <div class="col-3 homepage_content">
    <h2>Some links for you</h2>
    <hr>
    <div id="home_navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'home_nav' ) ); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
