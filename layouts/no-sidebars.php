<?php
/*
Template Name: No Sidebars
*/
?>
<?php get_header(); ?>

<!-- header -->
<div class="container container-top">
    <?php get_template_part('partials/header', 'masthead'); ?>
    <?php get_template_part('partials/header', 'navbar'); ?>
</div> <!-- /.container-top -->

<?php
if (is_front_page()) {
    get_template_part('partials/header', 'frontpage');
} else {
    get_breadcrumbs();
}
?>


<div class="container" role="main">
  <div class="row">
    <div class="col-sm-12">
      <?php // check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
          echo '<div class="featuredimage" role="presentation">';
          the_post_thumbnail('wrdsb-full-width','alt');
          echo '</div>';
        }
      ?>
      <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();

          // Include the page content template.
          get_template_part('partials/content', 'page');

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }
        endwhile;
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
