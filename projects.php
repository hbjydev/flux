<?php /* Template Name: Portfolio List */ get_header(); query_posts('cat=-')?>
<h1 id="page_title">Stuff I've Built</h1>
<div id="posts_wrapper" class="skinny_wrapper">
  <?php global $post;
  $args = array( 'post_type' => 'post' );

  $myposts = get_posts( $args );
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
