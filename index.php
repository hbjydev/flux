<?php get_header(); ?>
<h1 id="page_title">Articles</h1>
<div id="posts_wrapper" class="skinny_wrapper">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article class="post">
          <p class="date"><?php the_date(); ?></p>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="excerpt"><?php the_excerpt(); ?></p>
          <hr>
        </article>
    <?php endwhile; ?>
<?php endif; ?>
</div>
<?php the_posts_pagination(array('screen_reader_text' => 'A')); get_footer(); ?>