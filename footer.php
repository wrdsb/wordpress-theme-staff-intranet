<?php
/**
 * The template for displaying the footer
 *
 * Displays from <div class="footer"> to </html>
 *
 * @package WordPress
 * @subpackage WRDSB
 */
?>
<div id="footer" class="footer" role="contentinfo">
    <div class="container">
        <div class="row">

            <div id="address" class="col-sm-6 col-md-3" aria-labelledby="address">
                <address>
                    <h1>Waterloo Region District School Board</h1>
                    <p>51 Ardelt Avenue<br />
                    Kitchener, ON N2C 2R5</p>
                    <p>Switchboard: 519-570-0003</p>
                </address>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="connect-wrdsb">
                <h1>G Suite</h1>
                <p><a style="color:white" href="https://mail.google.com"><img style="display:inline" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_gmail_32px.png" />&nbsp;Gmail</a></p>
                <p><a style="color:white" href="https://calendar.google.com"><img style="display:inline" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_calendar_32px.png" />&nbsp;Calendar</a></p>
                <p><a style="color:white" href="https://drive.google.com"><img style="display:inline" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_drive_32px.png" />&nbsp;Drive</a></p>
                <p><a style="color:white" href="https://groups.google.com"><img style="display:inline" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_groups_32px.png" />&nbsp;Groups</a></p>
            </div>

            <div class="col-sm-6 col-md-3" role="region">
                <?php if (wrdsb_get_school_code()) { ?>
                    <h1>Trillium Data</h1>
                    <ul>
                        <li><a href="<?php echo get_site_url(); ?>/trillium/classes">Class lists</a></li>
                    </ul>
                <?php } ?>
            </div>

            <div class="col-sm-6 col-md-3" role="region">
                <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-right' ); ?>
                <?php endif; ?>
            </div>
    
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
