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

    <hr>

    <div id="share_box">
      <p>Share <?php the_title(); ?></p>
      <a onclick="javascript:window.open('http://twitter.com/share?text=Check out <?php the_title(); ?> by @haydenbjyoung!&amp;url=<?php the_permalink(); ?>', '_blank', 'width=800, height=500, top=200, left=300');void(0);"><i class="fa fa-twitter"></i></a>
      <a onclick="javascript:window.open('http://facebook.com/sharer.php?u=<?php the_permalink(); ?>', '_blank', 'width=800, height=500, top=200, left=300');void(0);"><i class="fa fa-facebook"></i></a>
      <a onclick="javascript:window.open('http://plus.google.com/share?url=<?php the_permalink(); ?>', '_blank', 'width=800, height=500, top=200, left=300');void(0);"><i class="fa fa-google-plus"></i></a>
    </div>

    <hr>

  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
