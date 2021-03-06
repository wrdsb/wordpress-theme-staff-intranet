<?php get_header(); ?>

<!-- 404.php -->

<div class="container-top">
    <?php get_template_part('partials/header', 'masthead'); ?>

    <?php if (! current_user_can_view_content()) {
        get_template_part('partials/content', 'unauthorized');
    } else {
        get_template_part('partials/header', 'navbar');

        if (is_front_page()) {
            get_template_part('partials/header', 'frontpage');
        } else {
            get_breadcrumbs();
        }
    } ?>
</div>

<?php if (current_user_can_view_content()) { ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" role="complementary">
                <h1><?php echo get_the_title($post->ID);?></h1>
            </div>
        </div>
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
<?php } ?>

<?php get_footer();
