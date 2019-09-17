<div class="navbar my-navbar" role="navigation" aria-labelledby="navbar-header">
   <?php/* <div id="navbar-header">
         <button type="button" class="navbar-toggle togglesearch" data-toggle="collapse" data-target=".navbar-search">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-search"></span>
        </button>

        <button type="button" class="navbar-toggle togglenav" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php echo get_bloginfo('name'); ?></a>
    </div>

    <div class="collapse navbar-search" role="search" aria-labelledby="mobileSearch">
        <form action="<?php echo home_url(); ?>/" method="get">
            <input aria-label="Search" type="text" name="s" id="mobileSearch" value="<?php the_search_query(); ?>" placeholder="Search" />
        </form>
    </div> */?>

    <div id="menu" class="container" role="navigation" aria_label="Menu">
        <?php if (has_nav_menu('top')) {
            wp_nav_menu(array('theme_location' => 'top', 'menu_class' => 'nav nav-justified', 'container_class' => 'collapse navbar-collapse'));
        } else {
            wp_page_menu(array('depth' => 1, 'show_home' => true, 'menu_class' => 'collapse navbar-collapse'));
        }?>
    </div>
</div> <!-- /.navbar -->
