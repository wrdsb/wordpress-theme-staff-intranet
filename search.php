<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>

<!-- search.php -->

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
            <div class="col-sm-12 col-lg-12">

                <?php get_search_form(); ?>

                <h1><?php printf(('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?></h1>

                <?php if (have_posts()) { ?>
                    <?php while (have_posts()) {
                        the_post(); ?>

                        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                        <?php if ('post' == get_post_type()) { ?>
                            <p class="postdate">Posted <?php echo get_the_date(); ?></p>
                        <?php } ?>

                        <?php the_excerpt(); ?>
                    <?php } ?>
            
                    <?php wrdsb_paging_nav(); ?>
        
                <?php } else { ?>
                    <?php get_template_part('partials/content', 'none'); ?>
                <?php } ?>

            </div> <!-- end content area -->
        </div>
    </div>
<?php } ?>

<?php get_footer();
