<?php get_header(); ?>

<!-- single.php -->

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
            } ?>

            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <!--<h1><?php the_title(); ?></h1> -->
                    <p class="postdate"> <?php the_time('F jS') ?>, <?php the_time('Y') ?></p>
                    <p><?php the_content(__('Read more'));?></p>

                    <?php
                    $display_cats = false;
                    $display_tags = false;

                    foreach ((get_the_category()) as $category) {
                        if (strtolower($category->cat_name) != 'uncategorized') {
                            $display_cats = true;
                        }
                    }

                    if (get_the_tags()) {
                        $display_tags = true;
                    }

                    if (!$display_cats && $display_tags) {
                        echo '<div class="clearfix"></div>';
                        echo '<p class="categories">Tags: ';
                        the_tags('', ' &middot; ', '');
                        echo '</p>';
                    } elseif ($display_cats && !$display_tags) {
                        echo '<div class="clearfix"></div>';
                        echo '<p class="categories">Categories: ';
                        the_category(' &middot; ');
                        echo '</p>';
                    } elseif ($display_cats && $display_tags) {
                        echo '<div class="clearfix"></div>';
                        echo '<p class="categories" role="menubar">Categories: ';
                        the_category(' &middot; ');
                        echo ' Tags: ';
                        the_tags('', ' &middot; ', '');
                        echo '</p>';
                    }
                    ?>

                    <?php comments_template(); // Get comments.php template ?>

                    <div class="prevnext-container" role="navigation">
                        <?php previous_post_link('<p class="prevpost">&laquo; Older: %link</p>'); ?>
                        <?php if (!get_adjacent_post(false, '', true)) {
                            echo '';
                        } // if there are no older articles ?>
        
                        <?php next_post_link('<p class="nextpost">Newer: %link &raquo;</p>'); ?>
                        <?php if (!get_adjacent_post(false, '', false)) {
                            echo '';
                        } // if there are no newer articles ?>
                    </div>
                <?php } ?>

            <?php } else { ?>
                <p> <?php _e('Sorry, no posts matched your criteria.'); ?> </p>
            <?php } ?>

            </div> <!-- end content area -->

            <?php
            # Both sidebars
            if (($has_left == true) and ($has_right == true)) {
                echo '<div class="col-sm-3 col-md-2 col-lg-2" role="complementary">';
                if (!is_front_page()) {
                    get_template_part('partials/sidebar', 'rmenu');
                }
                get_template_part('partials/sidebar', 'right');
                echo '</div>';

            # Just left sidebar
                # Nothing to do

            # Just right sidebar
            } elseif (($has_left == false) and ($has_right == true)) {
                echo '<div class="col-sm-3" role="complementary">';
                if (!is_front_page()) {
                    get_template_part('partials/sidebar', 'rmenu');
                }
                get_template_part('partials/sidebar', 'right');
                echo '</div>';
            # No sidebars
                # Nothing to do
            } ?>
        </div>
    </div>
<?php } ?>

<?php get_footer();
