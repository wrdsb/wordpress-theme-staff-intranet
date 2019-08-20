<div class="header">
    <div class="row">
        <div class="col-md-9 col-sm-8">
            <div id="logo" role="heading">
                <a aria-labelledby="logo" href="<?php echo home_url(); ?>/"><span><?php echo get_bloginfo('name'); ?></span>
                    <p id="sitename"><?php echo get_bloginfo('name'); ?></p>
                    <?php if (get_bloginfo('description') != '') {?>
                        <p id="sitedescription"><?php echo get_bloginfo('description'); ?></p>
                    <?php }?>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="staff-shortcuts" role="complementary" aria-labelledby="staff-shortcut-list">
                <div id="staff-shortcut-list">
                </div>
                <div class="searchbox" role="search" aria-labelledby="search">
                    <form action="<?php echo home_url(); ?>/" method="get">
                        <input aria-label="Search" type="text" name="s" id="search" value="<?php the_search_query();?>" placeholder="Search" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.masthead -->
