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
<div id="print_warning" class="printonly">
    <p>This information expires once printed. Please always refer to the online version for the most current information.</p>
</div>
<!-- footer.php -->

<div id="footer" class="footer" role="contentinfo">
    <div id="fat-footer-container" class="container">
    <style type="text/css">
    #fat-footer-container a {
        color: white;
    }
    #fat-footer-container li {
        line-height: 200%;
    }
    #fat-footer-container ul {
        list-style-type: none;
        padding-left: 0;
    }
    .guide-icon {
        width: 22px; 
        display: inline; 
        padding-right: 7px; 
        padding-bottom: 3px;
    }
    </style>

        <div class="row">
            <div class="col-sm-6 col-md-3" aria-labelledby="footer-menu-governance">
                <h1 id="footer-menu-governance" role="navigation">Governance</h1>
                <ul>
                    <li><a id="footer-link-policies" href="/board-policies/">Policies</a></li>
                    <li><a id="footer-link-procedures" href="/board-procedures/">Procedures</a></li>
                    <li><a id="footer-link-protocols" href="/board-protocols/">Protocols/Guidelines</a></li>
                    <li><a id="footer-link-board-forms" href="/board-forms/">Board Forms</a></li>
                    <li><a id="footer-link-all-staff-notices" href="/all-staff-notices/">All Staff Notices</a></li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="footer-menu-g-suite">
                <h1 id="footer-menu-g-suite" role="navigation">G Suite</h1>
                <ul>
                    <li><a id="footer-link-google-mail" target="_blank" href="https://mail.google.com">Gmail</a></li>
                    <li><a id="footer-link-google-calendar" target="_blank" href="https://calendar.google.com">Calendar</a></li>
                    <li><a id="footer-link-google-drive" target="_blank" href="https://drive.google.com">Drive</a></li>
                    <li><a id="footer-link-google-groups" target="_blank" href="https://groups.google.com">Groups</a></li>
                    <li><a id="footer-link-g-suite-more" href="/g-suite/"><img src="https://staff.wrdsb.ca/wp-content/uploads/2021/07/streamline-icon-bookmarks-document@48x48.png" class="guide-icon" alt="WRDSB Product Guide" />G Suite Guide</a></li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="footer-menu-help">
                <h1 id="footer-menu-help" role="navigation">Help!</h1>
                <ul>
                    <li><a id="footer-link-sds" target="_blank" href="https://msdsmanagement.msdsonline.com/company/ccc3134c-662d-499b-862d-39480a4688ed/">SDS Quick Search (MSDS)</a></li>
                    <li><a id="footer-link-osbie" target="_blank" href="http://osbie.wrdsb.ca/">OSBIE Injury Reporting System</a></li>
                    <li><a id="footer-link-help-desk" target="_blank" href="https://itservicedesk.wrdsb.ca/">ITService Desk</a></li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="footer-menu-it-help">
                <h1 id="footer-menu-it-help" role="navigation">IT Help</h1>
                <ul>
                    <li><a id="footer-link-password-reset" target="_blank" href="https://mypassword.wrdsb.ca/">Password Reset</a></li>
                    <li><a id="footer-link-itservicedesk" target="_blank" href="https://itservicedesk.wrdsb.ca/">ITService Desk</a></li>
                    <li><a id="footer-link-wifi-docs" target="_blank" href="https://wifidocs.wrdsb.ca/"><img src="https://staff.wrdsb.ca/wp-content/uploads/2021/07/streamline-icon-bookmarks-document@48x48.png" class="guide-icon" alt="WRDSB Product Guide" />Wifi Docs</a></li>
                    <li><a id="footer-link-it-help-more" href="/its/">ITS Department Site</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3" aria-labelledby="footer-menu-teachers">
                <h1 id="footer-menu-teachers" role="navigation">For Teachers</h1>
                <ul>
                    <li><a id="footer-link-compass" target="_blank" href="https://compass.wrdsb.ca/portal/">Compass for Success (enCompass)</a></li>
                    <li><a id="footer-link-esl-tracker" target="_blank" href="https://etrillium.wrdsb.ca/twebboard/TWEBESL">ESL Tracker</a></li>
                    <li><a id="footer-link-s4s" target="_blank" href="https://s4s.wrdsb.ca/">Support 4 Students (S4S)</a></li>
                    <li><a id="footer-link-web-attendance" target="_blank" href="https://etrillium.wrdsb.ca/twebschool/TWEBATT/ptEntry.action?moduleId=TWEBATT">Trillium Web Attendance</a></li>
                    <li><a id="footer-link-trillium-guide" href="/trillium/"><img src="https://staff.wrdsb.ca/wp-content/uploads/2021/07/streamline-icon-bookmarks-document@48x48.png" class="guide-icon" alt="WRDSB Product Guide" />Trillium Guide</a></li>
                    <li><a id="footer-link-twea" target="_blank" href="https://etrillium.wrdsb.ca/trillium/">TWEA</a></li>
                    <li><a id="footer-link-twea-guide" href="/twea/"><img src="https://staff.wrdsb.ca/wp-content/uploads/2021/07/streamline-icon-bookmarks-document@48x48.png" class="guide-icon" alt="WRDSB Product Guide" />TWEA Guide</a></li>
                    <li><a id="footer-link-d2l" target="_blank" href="http://wrdsb.elearningontario.ca/">Virtual Learning Environment (VLE/D2L)</a></li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="footer-menu-school-staff">
                <h1 id="footer-menu-school-staff" role="navigation">For School Staff</h1>
                <ul role="tree">
                    <?php if (wrdsb_get_school_code()) { ?>
                    <li role="presentation"><a role="treemitem" id="footer-link-class-lists" href="<?php echo get_site_url(); ?>/trillium/classes">Class lists</a></li>
                    <?php } ?>
                    <?php if (wrdsb_get_school_code()) { ?>
                    <li><a id="footer-link-device-tracking" href="<?php echo get_site_url(); ?>/quartermaster/asset-assignments/all">Device Assignments</a></li>
                    <?php } ?>
                    <?php if (wrdsb_get_school_code()) { ?>
                    <li><a id="footer-link-device-tracking" href="<?php echo get_site_url(); ?>/school-data/home">School Data Collection</a></li>
                    <?php } ?>
                    <li><a id="footer-link-mental-health" href="/mental-health/"><img src="https://staff.wrdsb.ca/wp-content/uploads/2021/07/streamline-icon-bookmarks-document@48x48.png" class="guide-icon" alt="WRDSB Product Guide" />Mental Health Guide</a></li>
                    <li><a id="footer-link-school-day" target="_blank" href="https://www.school-day.com/">School Day</a></li>
                    <li><a id="footer-link-ssr" href="/eguide/"><img src="https://staff.wrdsb.ca/wp-content/uploads/2021/07/streamline-icon-bookmarks-document@48x48.png" class="guide-icon" alt="WRDSB Product Guide" />Single Source Resource</a></li>
                    <li><a id="footer-link-translations" href="/resources6/translations/">Translations</a></li>
                    <li><a id="footer-link-trillium-report-centre" target="_blank" href="http://ec-oraapp1.wrdsb.ca:8888/forms/frmservlet?config=TRRP">Trillium Report Centre</a></li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="footer-menu-online-tools">
                <h1 id="footer-menu-online-tools" role="navigation">Online Tools</h1>
                <ul>
                    <li><a id="footer-link-calendars" href="/calendar/">Calendars</a></li>
                    <li><a id="footer-link-ess" target="_blank" href="https://ess.wrdsb.ca">Self-Service Portal</a></li>
                    <li><a id="footer-link-staff-directory" href="/directory/">Staff Directory</a></li>
                    <li><a id="footer-link-online-tools-more" href="/online-tools/">More online tools</a></li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="footer-menu-training">
                <h1 id="footer-menu-training" role="navigation">Training and PD</h1>
                <ul>
                    <li><a id="footer-link-equity" href="/indigenous-equity-human-rights/equity-and-inclusion/">Equity and Inclusion</a></li>
                    <li><a id="footer-link-ntip" href="/ntip/">New Teacher Induction Program (NTIP)</a></li>
                    <li><a id="footer-link-oetc" target="_blank" href="https://training.wrdsb.ca">Online Employee Training Centre</a></li>
                    <li><a id="footer-link-prolearn" target="_blank" href="https://wrdsb.pl.ca.powerschool.com/">ProLearn</a></li>
                    <li><a id="footer-link-prolearn-guide" href="/prolearn/"><img src="https://staff.wrdsb.ca/wp-content/uploads/2021/07/streamline-icon-bookmarks-document@48x48.png" class="guide-icon" alt="WRDSB Product Guide" />ProLearn Guide</a></li>
                    <li><a id="footer-link-training-more" href="/training/"><img src="https://staff.wrdsb.ca/wp-content/uploads/2021/07/streamline-icon-bookmarks-document@48x48.png" class="guide-icon" alt="WRDSB Product Guide" />Training Guide</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<div class="container" id="loginbar" role="navigation" aria_labelledby="adminbar">
    <p id="adminbar" class="copyright" style="text-align: center;">
        <?php
            // display the login/logout link
            if ( is_user_logged_in() ) {
                wp_loginout();
            }
        ?>
    </p>
</div>

<?php wp_footer(); ?>

</body>
</html>
