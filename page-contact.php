<?php get_header(); ?>

<div id="post_show_content" class="wrapper_padding skinny_wrapper">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <header>
      <h1><?php the_title(); ?></h1>
      <hr>
    </header>

    <div class="content">
      <?php the_content(); ?>

      <form class="flux-form" action="post">
        <div class="flux-text-field">
          <input type="text" name="name" id="name" placeholder="a"><br>
          <label for="name">Enter <b>name</b></label>
        </div>
        <div class="flux-text-field">
          <input type="email" name="email" id="email" placeholder="a"><br>
          <label for="email">Enter <b>email</b></label>
        </div>
        <div class="flux-text-field">
          <input type="text" name="subject" id="subject" placeholder="a"><br>
          <label for="subject">Enter <b>subject</b></label>
        </div>
        <!-- <div class="flux-textarea">
          <textarea name="message" id="message" placeholder=" "></textarea><br>
          <label for="message">Enter <b>message</b></label>
        </div> -->
      </form>
    </div>

  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
