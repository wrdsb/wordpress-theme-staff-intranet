<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage WRDSB
 * @since WRDSB 1.0
 */
?>

<?php
//Featured Image

// check if the full news item
if (is_single()) {
    // check if the post has a Post Thumbnail assigned to it.
    if (has_post_thumbnail()) {
        echo '<div class="featuredimage" role="presentation">';
        the_post_thumbnail('wrdsb-full-width', 'alt');
        echo '</div>';
    }

    // else if part of news stream
} else {
    // check if the post has a Post Thumbnail assigned to it.
    if (has_post_thumbnail()) {
        // link Post Thumbnail to Post
        // $post is from functions.php
        echo '<div class="featuredimage" role="presentation"><a href="'. get_permalink($post->ID) .'">'. the_post_thumbnail('wrdsb-full-width','alt') .'</a></div>';
    }
}

if (is_single()) {
    the_title('<h1>', '</h1>');
} else {
    the_title('<h2 class="news"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
}

if ('post' == get_post_type()) {
    echo '<p class="postdate">Posted '. get_the_date() .'</p>';
}

if (has_excerpt()) {
    the_excerpt();
    echo '<p class="readmore"><a href="'. get_permalink($post->ID) . '"><strong>Read more about</strong> <cite>'. get_the_title($post->ID) .'</cite> &#187;</a></p>';
} else {
    the_excerpt();
}

get_template_part('partials/content', 'cats-tags');
