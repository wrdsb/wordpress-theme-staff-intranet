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
                    <p>Switchboard: 519-570-0003<br />
                    <a href="https://www.wrdsb.ca/about-the-wrdsb/contact/">Contact the WRDSB</a></p>
                    <p><a href="https://www.wrdsb.ca/about-the-wrdsb/contact/website-feedback/" target="_blank">Website Feedback Form</a></p>
                </address>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="connect-wrdsb">
                <?php if (wrdsb_i_am_a_staff_site()) { ?>
                    <?php if (wrdsb_get_school_code()) { ?>
                        <h1>Trillium Data</h1>
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>/trillium/classes">Class lists</a></li>
                        </ul>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="col-sm-6 col-md-3" role="region">
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
