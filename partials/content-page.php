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
        echo '<ul>';
        foreach ($children as $child) {
            echo '<li>';
            echo '<strong><a href="'.get_permalink($child->ID).'">'.$child->post_title.'</a></strong>';
            if (get_the_excerpt($child) != '') {
                echo '<p>';
                echo get_the_excerpt($child);
                echo '</p>';
                echo '</li>';
            }
        }
        echo '</ul>';
    }
    the_content();
} else {
    the_content();
}

get_template_part('partials/content', 'cats-tags');
