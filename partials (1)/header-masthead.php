<div id="masthead">
    <div class="header" class="hello">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div id="site_details" role="heading">
                        <p id="sitename"><span>WRDSB</span><br /><?php echo get_bloginfo('name'); ?></p>
                        <?php if (get_bloginfo('description') != '') {?>
                        <p id="sitedescription"><?php echo get_bloginfo('description'); ?></p>
                        <?php }?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="staff-shortcuts" role="complementary" aria-labelledby="staff-shortcut-list">
                        <div class="searchbox" role="search" aria-labelledby="search">
                            <form action="<?php echo home_url(); ?>/" method="get">
                                <input aria-label="Search" type="text" name="s" id="search" value="<?php the_search_query();?>" placeholder="Search" />
                            </form>
                        </div>
                        <div id="staff-shortcut-list">
                            <a href="https://gmail.google.com/" target="_blank" rel="noopener"><img src="https://wrdsb-ui-assets.s3.amazonaws.com/1/1.1.0/images/gmail.svg" /></a><a href="https://drive.google.com/" target="_blank" rel="noopener"><img src="https://wrdsb-ui-assets.s3.amazonaws.com/1/1.1.0/images/drive.svg" /></a><a href="https://calendar.google.com/" target="_blank" rel="noopener"><img src="https://wrdsb-ui-assets.s3.amazonaws.com/1/1.1.0/images/calendar.svg" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.masthead -->