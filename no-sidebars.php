<?php
/*
Template Name: No Sidebars
*/
?>
<?php get_header(); ?>

<!-- no-sidebars.php -->

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
            <div class="col-sm-12">
                <?php // check if the post has a Post Thumbnail assigned to it.
                if (has_post_thumbnail()) {
                    echo '<div class="featuredimage" role="presentation">';
                    the_post_thumbnail('wrdsb-full-width', 'alt');
                    echo '</div>';
                }
                ?>
      
                <?php
                // Start the Loop.
                while (have_posts()) {
                    the_post();

                    // Include the page content template.
                    get_template_part('partials/content', 'page');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                } ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php get_footer();
