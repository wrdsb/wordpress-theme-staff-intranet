<?php
foreach ((get_the_category()) as $category) {
    if (strtolower($category->cat_name) != 'uncategorized') {
        $display_cats = 1;
    }
}

if (get_the_tags()) {
    $display_tags = 1;
}

if (!isset($display_cats) && isset($display_tags)) {
    echo '<div class="clearfix"></div>';
    echo '<p class="categories" role="menubar">Tags: ';
    the_tags('', ' &middot; ', '');
    echo '</p>';
} elseif (isset($display_cats) && !isset($display_tags)) {
    echo '<div class="clearfix"></div>';
    echo '<p class="categories" role="menubar">Categories: ';
    the_category(' &middot; ');
    echo '</p>';
} elseif (isset($display_cats) && isset($display_tags)) {
    echo '<div class="clearfix"></div>';
    echo '<p class="categories" role="menubar">Categories: ';
    the_category(' &middot; ');
    echo ' Tags: ';
    the_tags('', ' &middot; ', '');
    echo '</p>';
}
