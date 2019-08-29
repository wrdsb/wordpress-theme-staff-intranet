<?php
/**
 * The template used for displaying page content
 */
?>
<?php the_title('<h1>', '</h1>'); ?>

<?php
if ($post->post_content == '') {
    $children = get_pages(array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'hierarchical' => 0,
        'parent' => $post->ID,
        'post_type' => 'page',
    ));
    
    // TODO: Make this a DL
    if ($children) {
        foreach ($children as $child) {
            echo '<h2>'.$child->post_title.'</h2>';
            echo '<p>';
            $our_excerpt = get_our_excerpt($child->ID, $post->ID);
            if (strlen($our_excerpt) < 5) {
                echo '[...]<p class="readmore" role="complementary"><a href="' . get_permalink($child->ID) . '"><strong>Read more about</strong> <cite>' . get_the_title($child->ID) . '</cite> &#187;</a></p>';
            } else {
                echo $our_excerpt;
            }
            echo '</p>';
        }
    }
    the_content();
} else {
    the_content();
}

get_template_part('partials/content', 'cats-tags');
