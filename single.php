<?php get_header(); ?>

<article id="post_show_content" class="wrapper_padding skinny_wrapper">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $img_id = get_post_thumbnail_id();
    if( !empty( $img_id ) ) {
      $img_url_array = wp_get_attachment_image_src($img_id, 'large', true);
      $img_url = $img_url_array[0];
    }
  ?>
  <?php if ( !empty( $img_url ) ) : ?>
    <img class="fimage" src="<?php echo($img_url) ?>" alt="Featured image" />
  <?php endif; ?>
    <header>
      <p class="date"><?php the_date(); ?></p>
      <h1><?php the_title(); ?></h1>
      <hr>
    </header>

    <div class="content">
      <?php the_content(); ?>
    </div>

    <div id="share_box">
      <p>Share <?php the_title(); ?></p>
      <a onclick="javascript:window.open('http://twitter.com/share?text=Check out <?php the_title(); ?> by @haydenbjyoung!&amp;url=<?php the_permalink(); ?>', '_blank', 'width=800, height=500, top=200, left=300');void(0);"><i class="fa fa-twitter"></i></a>
      <a onclick="javascript:window.open('http://facebook.com/sharer.php?u=<?php the_permalink(); ?>', '_blank', 'width=800, height=500, top=200, left=300');void(0);"><i class="fa fa-facebook"></i></a>
      <a onclick="javascript:window.open('http://plus.google.com/share?url=<?php the_permalink(); ?>', '_blank', 'width=800, height=500, top=200, left=300');void(0);"><i class="fa fa-google-plus"></i></a>
    </div>

    <hr>
    <?php // If comments are open or we have at least one comment, load up the comment template.
     if ( comments_open() || get_comments_number() ) :
         comments_template();
     endif; ?>
  <?php endwhile; endif; ?>
</article>

<?php get_footer(); ?>
