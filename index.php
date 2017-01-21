
<?php
/*
Template Name: Default Template Page
*/
get_header(); ?>

  <div class="container">
    <article id="post-<?php the_ID(); ?>">
      <h2 class="entry-header">
        <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
      </h2>
        <div class="entry-content">
          <?php
            while(have_posts()) : the_post();
              the_content();
            endwhile;
          ?>
        </div> <!-- entry content -->
    </article>
  </div> <!-- container -->

<?php get_footer(); ?>
