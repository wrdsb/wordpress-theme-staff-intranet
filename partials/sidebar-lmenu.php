<?php
/**
 * The menu on the left of the content.
 * Contains a page menu by default.
 * Optionally, replaces page menu with custom menu.
 *
 * @package WordPress
 * @subpackage WRDSB
 * @since WRDSB 1.0
 */
;?>
<div class="navbar my-sub-navbar" id="section_navigation" role="navigation">

    <?php if (has_nav_menu('left')) {  // If we have a menu in the 'left' menu location ?>
        <div class="sub-navbar-header" aria-labelledby="section_navigation">
            <button type="button" class="navbar-toggle toggle-subnav" data-toggle="collapse" data-target=".sub-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">Subnav</span>
        </div>
        <div class="collapse sub-navbar-collapse">
            <div class="sub-menu-heading">
                <?php $menu_locations = get_nav_menu_locations(); ?>
                <?php $menus          = wp_get_nav_menus();?>
                <?php foreach ($menus as $menu) {
                    if ($menu->term_id == $menu_locations['left']) {
                        echo '<span>' . $menu->name . '</span>';
                    }
                } ?>
            </div>
            <div class="sub-menu-items">
                <?php wp_nav_menu(array('theme_location' => 'left', 'menu_class' => '', 'container' => false)); ?>
            </div>
        </div>

    <?php } else {  // Else we display a pages menu by default
        $siblings = get_pages(array(
            'sort_order'   => 'ASC',
            'sort_column'  => 'menu_order',
            'hierarchical' => 0,
            'parent'       => $post->post_parent,
            'post_type'    => 'page',
        ));
        $children = get_pages(array(
            'sort_order'   => 'ASC',
            'sort_column'  => 'menu_order',
            'hierarchical' => 0,
            'parent'       => $post->ID,
            'post_type'    => 'page',
        ));
        ?>
        
        <div class="sub-navbar-header">
            <button type="button" class="navbar-toggle toggle-subnav" data-toggle="collapse" data-target=".sub-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">Subnav</span>
        </div>
        
        <div class="collapse sub-navbar-collapse">
            <div class="sub-menu-heading">
                <?php if (0 != $post->post_parent) {?>
                    <span><a href="<?php echo get_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a></span>
                <?php } else {?>
                    <span><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></span>
                <?php } ?>
            </div>
        
            <div class="sub-menu-items">
                <ul>
                    <?php
                    foreach ($siblings as $sibling) {
                        if (0 != $sibling->post_parent) {
                            if ($sibling->ID == $post->ID) {
                                echo '<li>';
                                echo '<strong>';
                                echo '<a href="' . get_permalink($sibling->ID) . '">' . $sibling->post_title . '</a>';
                                echo '</strong>';
                            } else {
                                echo '<li>';
                                echo '<a href="' . get_permalink($sibling->ID) . '">' . $sibling->post_title . '</a>';
                            }
                        }
                        if ($sibling->ID == $post->ID && $children) {
                            if (0 != $post->post_parent) {
                                echo '<ul class="nav_current_page_children_container">';
                            } else {
                                echo '<ul>';
                            }
                            foreach ($children as $child) {
                                echo '<li><a href="' . get_permalink($child->ID) . '">' . $child->post_title . '</a></li>';
                            }
                            echo '</ul>';
                        }
                        if (0 != $sibling->post_parent) {
                            if ($sibling->ID == $post->ID) {
                                echo '</strong>';
                            }
                            echo '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    <?php } ?>

</div> <!-- end navigation -->
