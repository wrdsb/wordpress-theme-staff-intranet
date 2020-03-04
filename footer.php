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

        <div class="row">
            <div class="col-sm-6 col-md-3" aria-labelledby="governance">
                <h1 id="footer-menu-governance">Governance</h1>
                <p><a id="footer-link-policies" style="color:white" href="/board-policies/">Policies</a></p>
                <p><a id="footer-link-procedures" style="color:white" href="/board-procedures/">Procedures</a></p>
                <p><a id="footer-link-protocols" style="color:white" href="/board-protocols/">Protocols/Guidelines</a></p>
                <p><a id="footer-link-board-forms" style="color:white" href="/board-forms/">Board Forms</a></p>
                <p><a id="footer-link-all-staff-notices" style="color:white" href="/all-staff-notices/">All Staff Notices</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="g suite">
                <h1 id="footer-menu-g-suite">G Suite</h1>
                <p><a id="footer-link-google-mail" style="color:white" target="_blank" href="https://mail.google.com">Gmail</a></p>
                <p><a id="footer-link-google-calendar" style="color:white" target="_blank" href="https://calendar.google.com">Calendar</a></p>
                <p><a id="footer-link-google-drive" style="color:white" target="_blank" href="https://drive.google.com">Drive</a></p>
                <p><a id="footer-link-google-groups" style="color:white" target="_blank" href="https://groups.google.com">Groups</a></p>
                <p><a id="footer-link-g-suite-more" style="color:white" href="/g-suite/">More...</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1 id="footer-menu-help">Help!</h1>
                <p><a id="footer-link-sds" style="color:white" target="_blank" href="https://msdsmanagement.msdsonline.com/company/ccc3134c-662d-499b-862d-39480a4688ed/">SDS Quick Search (MSDS)</a></p>
                <p><a id="footer-link-osbie" style="color:white" target="_blank" href="http://osbie.wrdsb.ca/">OSBIE Injury Reporting System</a></p>
                <p><a id="footer-link-help-desk" style="color:white" target="_blank" href="https://itservicedesk.wrdsb.ca/">ITService Desk (Help Desk)</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1 id="footer-menu-it-help">IT Help</h1>
                <p><a id="footer-link-password-reset" style="color:white" target="_blank" href="https://mypassword.wrdsb.ca/">Password Reset</a></p>
                <p><a id="footer-link-itservicedesk" style="color:white" target="_blank" href="https://itservicedesk.wrdsb.ca/">ITService Desk (Help Desk)</a></p>
                <p><a id="footer-link-wifi-docs" style="color:white" target="_blank" href="https://wifidocs.wrdsb.ca/">Wifi Docs</a></p>
                <p><a id="footer-link-it-help-more" style="color:white" href="/its/">More...</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1 id="footer-menu-teachers">For Teachers</h1>
                <p><a id="footer-link-web-attendance" style="color:white" target="_blank" href="https://etrillium.wrdsb.ca/twebschool/TWEBATT/ptEntry.action?moduleId=TWEBATT">Trillium Web Attendance</a></p>
                <p><a id="footer-link-twea" style="color:white" target="_blank" href="https://etrillium.wrdsb.ca/trillium/">TWEA</a></p>
                <p><a id="footer-link-s4s" style="color:white" target="_blank" href="https://s4s.wrdsb.ca/">Support 4 Students (S4S)</a></p>
                <p><a id="footer-link-compass" style="color:white" target="_blank" href="https://compass.wrdsb.ca/portal/">Compass for Success (enCompass)</a></p>
                <p><a id="footer-link-d2l" style="color:white" target="_blank" href="http://wrdsb.elearningontario.ca/">Virtual Learning Environment (VLE/D2L)</a></p>
                <p><a id="footer-link-esl-tracker" style="color:white" target="_blank" href="https://etrillium.wrdsb.ca/twebboard/TWEBESL">ESL Tracker</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1 id="footer-menu-school-staff">For School Staff</h1>
                <?php if (wrdsb_get_school_code()) { ?>
                    <p><a id="" style="color:white" href="<?php echo get_site_url(); ?>/trillium/classes">Class lists</a></p>
                <?php } ?>
                <p><a id="footer-link-trillium-report-centre" style="color:white" target="_blank" href="http://ec-oraapp1.wrdsb.ca:8888/forms/frmservlet?config=TRRP">Trillium Report Centre</a></p>
                <p><a id="footer-link-school-day" style="color:white" target="_blank" href="https://www.school-day.com/">School Day</a></p>
                <p><a id="footer-link-ssr" style="color:white" href="/eguide/">Single Source Resource (eGuide)</a></p>
                <p><a id="footer-link-translations" style="color:white" href="/resources6/translations/">Translations</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1 id="footer-menu-online-tools">Online Tools</h1>
                <p><a id="footer-link-staff-directory" style="color:white" href="/directory/">Staff Directory</a></p>
                <p><a id="footer-link-calendars" style="color:white" href="/calendar/">Calendars</a></p>
                <p><a id="footer-link-ess" style="color:white" target="_blank" href="https://ess.wrdsb.ca">Employee Self-Service Portal</a></p>
                <p><a id="footer-link-mental-health" style="color:white" target="_blank" href="/mental-health/">Mental Health</a></p>
                <p><a id="footer-link-online-tools-more" style="color:white" href="/online-tools/">More...</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1 id="footer-menu-training">Training and PD</h1>
                <p><a id="footer-link-oetc" style="color:white" target="_blank" href="https://training.wrdsb.ca">Online Employee Training Centre</a></p>
                <p><a id="footer-link-pd-place" style="color:white" target="_blank" href="http://wrdsb.pdplace.com/">PD Place</a></p>
                <p><a id="footer-link-equity" style="color:white" href="">Equity and Inclusion</a></p>
                <p><a id="footer-link-ntip" style="color:white" href="/ntip/">New Teacher Induction Program (NTIP)</a></p>
                <p><a id="footer-link-training-more" style="color:white" href="/training/">More...</a></p>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.js"></script>
<script type="text/javascript">
    function startIntro() {
        var intro = introJs();
        intro.setOptions({
            tooltipPosition: 'auto',
            positionPrecedence: ['left', 'right', 'top', 'bottom'],
            overlayOpacity: 0.9,
            steps: [
                {
                    element: '#fat-footer-container',
                    intro: "Many of the most popular links from the top menu are now available directly from the footer on <em>every</em> page of the Staff Site!"
                },
                {
                    element: '#fat-footer-container',
                    intro: "<strong>Tip:</strong> You can always jump to the footer of any page by hitting the <strong>'End'</strong> key on your keyboard."
                },
                {
                    element: '#footer-menu-governance',
                    intro: "<p><strong>Governance Footer</strong></p><p>You can now jump directly to Policies, Procedures, etc. from the footer on every page.</p>"
                },
                {
                    element: '#footer-link-all-staff-notices',
                    intro: "<p><strong>Governance Footer</strong></p><p>You can also jump to the <strong>All Staff Notices</strong> Google Group from here.</p>"
                },
                {
                    element: '#footer-menu-g-suite',
                    intro: "<p><strong>G Suite Footer</strong></p><p>You can access commonly used G Suite apps from this menu.</p>"
                },
                {
                    element: '#footer-link-google-groups',
                    intro: "<strong>Tip:</strong> Links which leave the Staff Site will open in a new window/tab."
                },
                {
                    element: '#footer-link-g-suite-more',
                    intro: "<p><strong>G Suite Handbook</strong></p><p>For more G Suite apps, as well as documentation, training, and FAQs, just click the <strong>'More...'</strong> link to visit the <strong>G Suite Handbook</strong>.</p>"
                },
                {
                    element: '#footer-menu-help',
                    intro: "<p><strong>Help!</strong></p><p>Have an issue or incident? You'll find help here.</p>"
                },
                {
                    element: '#footer-menu-it-help',
                    intro: "<p><strong>IT Help</strong></p><p>You can get help with IT related issues directly from this menu.</p>"
                },
                {
                    element: '#footer-link-it-help-more',
                    intro: "<p><strong>ITS Website</strong></p><p>For more IT related information, just click the <strong>'More...'</strong> link to visit the <strong>ITS Handbook</strong>.</p>"
                },
                {
                    element: '#footer-menu-teachers',
                    intro: "<p><strong>For Teachers</strong></p><p>Here you'll find links to some of the applications frequently used by teachers.</p>"
                },
                {
                    element: '#footer-menu-school-staff',
                    intro: "<p><strong>For School Staff</strong></p><p>If you work in a school, you'll probably find this menu helpful.</p>"
                },
                {
                    element: '#footer-menu-online-tools',
                    intro: "<p><strong>Online Tools</strong></p><p>Here you'll find links helpful to staff in all roles.</p>"
                },
                {
                    element: '#footer-link-online-tools-more',
                    intro: "<p><strong>Online Tools</strong></p><p>To jump to a complete list of online tools, just click the <strong>'More...'</strong> link.</p>"
                },
                {
                    element: '#footer-menu-training',
                    intro: "<p><strong>Training and PD</strong></p><p>Many of the commonly used training links can be found here...</p>"
                },
                {
                    element: '#footer-link-training-more',
                    intro: "<p><strong>Training and PD</strong></p><p>For the rest, just click on 'More...'</p>"
                },
                {
                    element: '#fat-footer-container',
                    intro: 'We\'ll be continuing to tweak these menus in response to your feedback. Have a suggestion? <a target="_blank" href="https://staff.wrdsb.ca/new-footer-feedback/">Let us know!</a>'
                },
            ]
        });
        intro.start();
    }
</script>
<script type="text/javascript">
    introJs().addHints();
</script>

</body>
</html>
