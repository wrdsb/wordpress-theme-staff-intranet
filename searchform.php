<?php $previous_query = $wp_query->query_vars['wp-posts-search'] ?? ''; ?>

<form method="get" id="azure-search-form" role="search" action="<?php echo esc_url(home_url('/')); ?>search/content/">

    <input type="text" class="search-field" name="wp-posts-search" placeholder="Search" value="<?php echo $previous_query; ?>">

    <input type="submit" value="Search">

</form>
