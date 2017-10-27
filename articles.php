<?php 
/* Template Name: Posts List */ get_header();
// Define custom query parameters
$custom_query_args = array('post_type'=>'post');

// Get current page and append to custom query parameters array
$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

// Instantiate custom query
$custom_query = new WP_Query( $custom_query_args );

// Pagination fix
$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $custom_query; ?>

<h1 id="page_title">Stuff I've Written</h1>
<div id="posts_wrapper" class="skinny_wrapper">
<?php if ( $custom_query->have_posts() ) : ?>
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
        <div class="post">
          <p class="date"><?php the_date(); ?></p>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <hr>
        </div>
    <?php endwhile; ?>
<?php endif; 
wp_reset_postdata(); ?>
</div>
<?php the_posts_pagination(); 
// Reset main query object
$wp_query = NULL;
$wp_query = $temp_query;
get_footer(); ?>