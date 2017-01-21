
<?php
/*
Template Name: Gallery
*/
get_header(); ?>

  <div class="container">
    <article id="post-<?php the_ID(); ?>">
      <h2 class="entry-header">
        <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
      </h2>
      <div class="entry-content">
        <div class="grid">

        </div>
      </div> <!-- entry content -->
    </article>
  </div> <!-- container -->

<?php get_footer(); ?>
<script src="/wordpress/wp-content/themes/glenrockhay/resources/js/gallery.js"></script>
