<?php
/*
Template Name: Empty Sidebars
*/
?>
<?php get_header(); ?>

<!-- empty-sidebars.php -->

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
            <?php $has_left = false; ?>
            <?php $has_right = false; ?>
            <?php if (is_active_sidebar('sidebar-left')) {
                $has_left = true;
            } ?>
            <?php if (is_active_sidebar('sidebar-right')) {
                $has_right = true;
            } ?>

            <?php
            # Both sidebars
            if (($has_left == true) and ($has_right == true)) {
                echo '<div class="col-sm-3 col-md-2 col-lg-2" role="complementary">';
                get_template_part('partials/sidebar', 'left');
                echo '</div>';

            # Just left sidebar
            } elseif (($has_left == true) and ($has_right == false)) {
                echo '<div class="col-sm-3 col-lg-3" role="complementary">';
                get_template_part('partials/sidebar', 'left');
                echo '</div>';

            # Just right sidebar
                # Nothing to do

            # No sidebars
                # Nothing to do
            } ?>

            <?php
            # Both sidebars
            if (($has_left == true) and ($has_right == true)) {
                echo '<div class="col-sm-6 col-md-8 col-lg-8" role="main">';

            # Just left sidebar
            } elseif (($has_left == true) and ($has_right == false)) {
                echo '<div class="col-sm-9 col-lg-9" role="main">';

            # Just right sidebar
            } elseif (($has_left == false) and ($has_right == true)) {
                echo '<div class="col-sm-9" role="main">';

            # No sidebars
            } elseif (($has_left == false) and ($has_right == false)) {
                echo '<div class="col-sm-12 col-lg-12" role="main">';
            } ?>

            <?php // check if the post has a Post Thumbnail assigned to it.
            if (has_post_thumbnail()) {
                echo '<div class="featuredimage" role="presentation">';
                if (($has_left == true) and ($has_right == true)) {
                    the_post_thumbnail('wrdsb-two-sidebars', 'alt');
                } elseif (($has_left == true) and ($has_right == false)) {
                    the_post_thumbnail('wrdsb-one-sidebar', 'alt');
                } elseif (($has_left == false) and ($has_right == true)) {
                    the_post_thumbnail('wrdsb-one-sidebar', 'alt');
                } elseif (($has_left == false) and ($has_right == false)) {
                    the_post_thumbnail('wrdsb-full-width', 'alt');
                }
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
            }
            ?>

            </div> <!-- end content area -->

            <?php
            # Both sidebars
            if (($has_left == true) and ($has_right == true)) {
                echo '<div class="col-sm-3 col-md-2 col-lg-2" role="complementary">';
                get_template_part('partials/sidebar', 'right');
                echo '</div>';

            # Just left sidebar
                # Nothing to do

            # Just right sidebar
            } elseif (($has_left == false) and ($has_right == true)) {
                echo '<div class="col-sm-3" role="complementary">';
                get_template_part('partials/sidebar', 'right');
                echo '</div>';

            # No sidebars
                # Nothing to do
            } ?>
        </div>
    </div>
<?php } ?>

<?php get_footer();
