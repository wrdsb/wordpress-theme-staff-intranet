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
                <div class="social-icons">
                    <!-- Facebook -->
                    <div class="fb-follow" data-href="https://www.facebook.com/wrdsb/" data-layout="button" data-show-faces="false" data-colorscheme="light" data-kid-directed-site="false" style="vertical-align:top;zoom:1;"></div>
                    <!-- Twitter -->
                    <a href="https://twitter.com/wrdsb" class="twitter-follow-button" data-show-count="false" data-dnt="true">Follow @wrdsb</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    <!-- Instagram -->
                    <style>
                        .ig-b- { display: inline-block; }
                        .ig-b- img { visibility: hidden; }
                        .ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
                        .ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
                        @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
                        .ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }
                    </style>
                    <a href="https://www.instagram.com/wr_dsb/?ref=badge" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a>
                </div>
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
