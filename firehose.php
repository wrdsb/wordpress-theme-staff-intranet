<?php
/*
Template Name: Firehose
*/
use WRDSB\Staff\Modules\ContentSearch\Model\ContentSearch as ContentSearch;

$sites_filter = "(site_url eq 'www.wrdsb.ca') or (site_url eq 'staff.wrdsb.ca')";
$publish_status_filter = "post_status eq 'publish'";
$post_type_filter = "post_type eq 'post'";

$search_filter = "( {$sites_filter} ) and ( {$publish_status_filter} ) and ( {$post_type_filter} )";

$search_params = [];
$search_params['target_url'] = 'https://wrdsb-codex.search.windows.net/indexes/lamson-wp-posts/docs/search?api-version=2016-09-01';
$search_params['api_key']    = WRDSB_CODEX_SEARCH_KEY;

$search_params['count']   = true;
$search_params['filter']  = $search_filter;
$search_params['facets']  = ['site_name'];
$search_params['orderby'] = 'post_modified_gmt desc';
$search_params['search']  = '*';
$search_params['select']  = '*';
$search_params['top']     = 10;

$search = new ContentSearch($search_params);
$search->run();
?>

<?php get_header(); ?>

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

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12" role="complementary">
            <h1>News &amp;<br />Announcements</h1>
        </div>
    </div>
</div>

<?php if (current_user_can_view_content()) { ?>
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


            <?php //echo '<pre>'; print_r($search_params); echo '</pre>' ?>
            <?php foreach ($search->results as $post) {
                setup_postdata($post);
                $post_link = "//{$post->site_url}/?p={$post->post_id}";
                
                the_title('<h2 class="news"><a href="'.$post_link.'" rel="bookmark">', '</a></h2>');
            
                echo '<p class="postdate">Posted '. get_the_date() .'</p>';

                if (has_excerpt()) {
                    the_excerpt();
                    echo '<p class="readmore"><a href="'.$post_link.'"><strong>Read more about</strong> <cite>'. get_the_title($post->ID) .'</cite> &#187;</a></p>';
                } else {
                    $excerpt = wpautop($post->post_content);
                    $excerpt = apply_filters('the_content', $excerpt);
                    $excerpt = str_replace(']]>', ']]&gt;', $excerpt);
                    $excerpt = substr($excerpt, strpos($excerpt, '<p>'), strpos($excerpt, '</p>') + 4);
                    $excerpt = strip_tags($excerpt);
                    if (strlen(preg_replace('/\s+/', '', $excerpt)) < 1) {
                        $excerpt = "[No content or summary provided.]";
                    }
                    echo $excerpt;
                    echo '<p class="readmore"><a href="'.$post_link.'"><strong>Read more about</strong> <cite>'. get_the_title($post->ID) .'</cite> &#187;</a></p>';
                }
                
                get_template_part('partials/content', 'cats-tags');
            } ?>

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
