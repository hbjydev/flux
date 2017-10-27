<?php /* Template Name: Posts List */ get_header();?>
<h1 id="page_title">Stuff I've Written</h1>
<div id="posts_wrapper" class="skinny_wrapper">
  <?php global $post;

  $myposts = get_posts(array('post_type'=>'post', 'posts_per_page'=>-1));
  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
  	<div class="post">
      <p class="date"><?php the_date(); ?></p>
  		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <hr>
    </div>
  <?php endforeach;
  wp_reset_postdata();?>
</div>
<?php get_footer();  ?>
