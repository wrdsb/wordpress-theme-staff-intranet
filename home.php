<?php get_header(); ?>

<!-- home.php -->

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
            <h1>News &amp;<br />Announcements</h1>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <?php
            $has_left = false;
            $has_right = false;
            if (is_active_sidebar('sidebar-left') || has_nav_menu('left')) {
                $has_left = true;
            }
            if (is_active_sidebar('sidebar-right') || has_nav_menu('right')) {
                $has_right = true;
            }

            # Both sidebars
            if (($has_left === true) and ($has_right === true)) {
                echo '<div class="col-sm-3 col-md-2 col-lg-2" role="complementary">';
                get_template_part('partials/sidebar', 'left');
                echo '</div>';
    
            # Just left sidebar
            } elseif (($has_left === true) and ($has_right === false)) {
                echo '<div class="col-sm-3 col-lg-3" role="complementary">';
                get_template_part('partials/sidebar', 'left');
                echo '</div>';

            # Just right sidebar
            } elseif (($has_left === false) and ($has_right === true)) {
                # Nothing to do

            # No sidebars
            } elseif (($has_left === false) and ($has_right === false)) {
                # Nothing to do
            } ?>

            <?php
            # Both sidebars
            if (($has_left === true) and ($has_right === true)) {
                echo '<div class="col-sm-6 col-md-8 col-lg-8" role="main">';

            # Just left sidebar
            } elseif (($has_left === true) and ($has_right === false)) {
                echo '<div class="col-sm-9 col-lg-9" role="main">';

            # Just right sidebar
            } elseif (($has_left === false) and ($has_right === true)) {
                echo '<div class="col-sm-9" role="main">';

            # No sidebars
            } elseif (($has_left === false) and ($has_right === false)) {
                echo '<div class="col-sm-12 col-lg-12" role="main">';
            } ?>

 
            <?php
            // Start the Loop.
            while (have_posts()) {
                the_post();

                // Include the post format-specific content template.
                get_template_part('partials/content', get_post_format());

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
            } ?>

            <?php
              // Previous/next post navigation.
              wrdsb_paging_nav();
            ?>

            </div> <!-- end content area -->

            <?php
            # Both sidebars
            if (($has_left === true) and ($has_right === true)) {
                echo '<div class="col-sm-3 col-md-2 col-lg-2" role="complementary">';
                get_template_part('partials/sidebar', 'right');
                echo '</div>';

            # Just left sidebar
                # Nothing to do

            # Just right sidebar
            } elseif (($has_left === false) and ($has_right === true)) {
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
