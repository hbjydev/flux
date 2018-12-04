<?php get_header(); ?>
<div class="wrapper wrapper_padding clearfix">
  <div class="col-1 about homepage_content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <hr/>
    <div id="home_content" class="content"><?php the_content(); ?></div>
    <?php endwhile; endif; ?>
  </div>
  <div class="col-2 homepage_content">
    <h2>Recent Articles</h2>
    <hr>
    <?php query_posts( 'posts_per_page=5' ); ?>
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
    <?php dynamic_sidebar( 'github' ); ?>
  </div>
</div>
<?php get_footer(); ?>
