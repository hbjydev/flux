<?php get_header(); ?>

<div id="post_show_content" class="wrapper_padding skinny_wrapper">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <header>
      <h1><?php the_title(); ?></h1>
      <hr>
    </header>

    <div class="content">
      <?php the_content(); ?>
    </div>

  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
