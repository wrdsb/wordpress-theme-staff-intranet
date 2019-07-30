<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php if (! current_user_can_view_content()) {
            get_template_part('partials/content', 'unauthorized');
        } else {
            $has_left = !is_front_page() ? true: false; // if not front page, has a left sidebar
            $has_right = false;
            if (is_active_sidebar('sidebar-left') || has_nav_menu('left')) {
                $has_left = true;
            }
            if (is_active_sidebar('sidebar-right') || has_nav_menu('right')) {
                $has_right = true;
            }

            # Both sidebars
            # left column
            if (($has_left === true) and ($has_right === true)):
                echo '<div class="col-sm-3 col-md-2 col-lg-2" role="complementary">';
                if (is_front_page()) {
                    get_template_part('partials/sidebar', 'left');
                } else {
                    get_template_part('partials/sidebar', 'lmenu');
                    get_template_part('partials/sidebar', 'left');
                }
                echo '</div>';

            # Just left sidebar
            elseif (($has_left === true) and ($has_right === false)):
                echo '<div class="col-sm-3 col-lg-3" role="complementary">';
                if (is_front_page()) {
                    get_template_part('partials/sidebar', 'left');
                } else {
                    get_template_part('partials/sidebar', 'lmenu');
                    get_template_part('partials/sidebar', 'left');
                }
                echo '</div>';
            # Just right sidebar
            elseif (($has_left === false) and ($has_right === true)):
            # Nothing to do
            # No sidebars
            elseif (($has_left === false) and ($has_right === false)):
            # Nothing to do
            endif; ?>

            <?php
            # Both sidebars
            # content area
            if (($has_left === true) and ($has_right === true)):
            echo '<div class="col-sm-6 col-md-8 col-lg-8" role="main">';
                    # Just left sidebar
                    elseif (($has_left === true) and ($has_right === false)):
            echo '<div class="col-sm-9 col-lg-9" role="main">';
                    # Just right sidebar
                    elseif (($has_left === false) and ($has_right === true)):
            echo '<div class="col-sm-9" role="main">';
                    # No sidebars
                    elseif (($has_left === false) and ($has_right === false)):
            echo '<div class="col-sm-12 col-lg-12" role="main">';
                    endif; ?>

            <?php // check if the post has a Post Thumbnail assigned to it.
            if (has_post_thumbnail()) {
                echo '<div class="featuredimage" rol="presentation">';
                if (($has_left === true) and ($has_right === true)):
                the_post_thumbnail('wrdsb-two-sidebars', 'alt'); elseif (($has_left === true) and ($has_right === false)):
                the_post_thumbnail('wrdsb-one-sidebar', 'alt'); elseif (($has_left === false) and ($has_right === true)):
                the_post_thumbnail('wrdsb-one-sidebar', 'alt'); elseif (($has_left === false) and ($has_right === false)):
                the_post_thumbnail('wrdsb-full-width', 'alt');
                endif;
                echo '</div>';
            } ?>

            <?php
            // Start the Loop.
            while (have_posts()) : the_post();

                // Include the page content template.
                get_template_part('partials/content', 'page');
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
            endwhile; ?>

            </div> <!-- end content area -->

            <?php
            # Both sidebars
            # right column
            if (($has_left === true) and ($has_right === true)):
                echo '<div class="col-sm-3 col-md-2 col-lg-2" role="complementary">';
                if (is_front_page()) {
                    get_template_part('partials/sidebar', 'right');
                } else {
                    get_template_part('partials/sidebar', 'rmenu');
                    get_template_part('partials/sidebar', 'right');
                }
                echo '</div>';
                # Just left sidebar
                # Nothing to do
                # Just right sidebar
            elseif (($has_left === false) and ($has_right === true)):
                echo '<div class="col-sm-3" role="complementary">';
                if (is_front_page()) {
                    get_template_part('partials/sidebar', 'right');
                } else {
                    get_template_part('partials/sidebar', 'rmenu');
                    get_template_part('partials/sidebar', 'right');
                }
                echo '</div>';
                # No sidebars
                # Nothing to do
            endif;
        } ?>
    </div>
</div>

<?php get_footer();
