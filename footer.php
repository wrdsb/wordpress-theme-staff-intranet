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
    <div id="fat-footer-end-key" class="container">

        <div class="row">
            <div class="col-sm-6 col-md-3" aria-labelledby="governance">
                <h1 id="fat-footer-tour-governance">Governance</h1>
                <p><a style="color:white" href="/board-policies/">Policies</a></p>
                <p><a style="color:white" href="/board-procedures/">Procedures</a></p>
                <p><a style="color:white" href="/board-protocols/">Protocols/Guidelines</a></p>
                <p><a style="color:white" href="/board-forms/">Board Forms</a></p>
                <p id="fat-footer-tour-all-staff-notices"><a style="color:white" href="/all-staff-notices/">All Staff Notices</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="g suite">
                <h1 id="fat-footer-tour-g-suite-menu">G Suite</h1>
                <p><a style="color:white" target="_blank" href="https://mail.google.com">Gmail</a></p>
                <p><a style="color:white" target="_blank" href="https://calendar.google.com">Calendar</a></p>
                <p><a style="color:white" target="_blank" href="https://drive.google.com">Drive</a></p>
                <p><a style="color:white" target="_blank" href="https://groups.google.com">Groups</a></p>
                <p id="fat-footer-g-suite-more"><a style="color:white" href="/g-suite/">More...</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1>Online Tools</h1>
                <p><a style="color:white" href="/directory/">Staff Directory</a></p>
                <p id="fat-footer-new-window"><a style="color:white" target="_blank" href="https://ess.wrdsb.ca">Employee Self-Service Portal</a></p>
                <p><a style="color:white" target="_blank" href="http://wrdsb.ebasefm.com/login">Rentals</a></p>
                <p><a style="color:white" href="/online-tools/">More...</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1>HELP!</h1>
                <p><a style="color:white" target="_blank" href="https://msdsmanagement.msdsonline.com/company/ccc3134c-662d-499b-862d-39480a4688ed/">SDS Quick Search</a></p>
                <p><a style="color:white" target="_blank" href="http://osbie.wrdsb.ca/">OSBIE Incident Reporting System</a></p>
                <p><a style="color:white" target="_blank" href="https://itservicedesk.wrdsb.ca/">ITService Desk (Help Desk)</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1>For Teachers</h1>
                <p><a style="color:white" target="_blank" href="https://etrillium.wrdsb.ca/twebschool/TWEBATT/ptEntry.action?moduleId=TWEBATT">Trillium Web Attendance</a></p>
                <p><a style="color:white" target="_blank" href="https://etrillium.wrdsb.ca/trillium/">TWEA</a></p>
                <p><a style="color:white" target="_blank" href="https://s4s.wrdsb.ca/">Support 4 Students (S4S)</a></p>
                <p><a style="color:white" target="_blank" href="https://compass.wrdsb.ca/portal/">enCompass Portal (Compass for Success)</a></p>
                <p><a style="color:white" target="_blank" href="https://etrillium.wrdsb.ca/twebboard/TWEBESL">ESL Tracker</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1>For School Staff</h1>
                <?php if (wrdsb_get_school_code()) { ?>
                    <p><a style="color:white" href="<?php echo get_site_url(); ?>/trillium/classes">Class lists</a></p>
                <?php } ?>
                <p><a style="color:white" target="_blank" href="http://ec-oraapp1.wrdsb.ca:8888/forms/frmservlet?config=TRRP">Trillium Report Centre</a></p>
                <p><a style="color:white" target="_blank" href="https://www.school-day.com/">School Day</a></p>
                <p><a style="color:white" href="/eguide/">Single Source Resource (eGuide)</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1>Training</h1>
                <p><a style="color:white" target="_blank" href="https://training.wrdsb.ca">Online Employee Training Centre</a></p>
                <p><a style="color:white" target="_blank" href="http://wrdsb.pdplace.com/">PD Place</a></p>
                <p><a style="color:white" href="/ntip/">New Teacher Induction Program (NTIP)</a></p>
                <p><a style="color:white" href="/training/">More...</a></p>
            </div>

            <div class="col-sm-6 col-md-3" aria-labelledby="">
                <h1>IT Help</h1>
                <p><a style="color:white" target="_blank" href="https://mypassword.wrdsb.ca/">Password Reset</a></p>
                <p><a style="color:white" target="_blank" href="https://itservicedesk.wrdsb.ca/">ITService Desk (Help Desk)</a></p>
                <p><a style="color:white" target="_blank" href="https://wifidocs.wrdsb.ca/">Wifi Docs</a></p>
                <p><a style="color:white" href="/its/">More...</a></p>
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
            steps: [
                {
                    element: '#fat-footer-tour-governance',
                    intro: ""
                },
                {
                    element: '#fat-footer-tour-all-staff-notices',
                    intro: ""
                },
                {
                    element: '#fat-footer-tour-g-suite-menu',
                    intro: "<p><strong>G Suite Footer</strong></p><p>You can now access commonly used G Suite apps from the footer of any page of the Staff Site.</p>"
                },
                {
                    element: '#fat-footer-end-key',
                    intro: "<strong>Tip:</strong> You can always jump to the footer of any page by hitting the <strong>'End'</strong> key on your keyboard."
                },
                {
                    element: '#fat-footer-new-window',
                    intro: 'Links which leave the Staff Site will open in a new window/tab.'
                },
                {
                    element: '#fat-footer-g-suite-more',
                    intro: "<p><strong>G Suite Handbook</strong></p><p>For more apps, as well as documentation, training, and FAQs, just click the <strong>'More...'</strong> link to visit the <strong>G Suite Handbook</strong>.</p>"
                }
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
