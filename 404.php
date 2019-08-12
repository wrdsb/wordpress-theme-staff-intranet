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

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-lg-12">

        <h1>404 Page Not Found</h1>
        <p>The information you were looking for may have been moved, deleted or doesn't exist.</p>
        <p>Please use the navigation above or search to find the information.</p>
        <p>
            If you still cannot find the information, please use the 
            <a href="#contact">Website Feedback Form</a> to let us know what's missing.
        </p>
        <?php get_search_form(); ?>

    </div>
  </div>
</div>

<?php get_footer();
