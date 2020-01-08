<?php
/**
 * The template displayed when user is not authorized to view content
 */
?>
<?php

$current_user = wp_get_current_user();

$privacy_option = get_option('blog_public');

switch ($privacy_option) {
    case '-2':
        $authorized_role = 'member';
        break;
    case '-3':
        $authorized_role = 'website administrator';
        break;
}
?>

<img src="https://staff.wrdsb.ca/wp-content/uploads/2019/08/Alert.png" width="200px" style="float:left; margin-right:30px">

<div style="margin-top:30px;">
    <p>
        Hi <?php echo $current_user->user_firstname; ?>,
    </p>
    <p>
        We're sorry, but you don't have permission to view this information.
    </p>
    <p>
        This section of the staff intranet 
        (&nbsp;<em>"<?php echo get_bloginfo('name'); ?>"</em>&nbsp;)
        can only be viewed by its
        <?php echo $authorized_role; ?>s.
    </p>
    <p>
        If you followed a link to get here, you can simply
        <a href="javascript:history.back()">go back</a>.
        Otherwise, head on over to the 
        <a href="/">Staff Intranet home page</a>.
    </p>
    <p>
        If we've made an error, and you should be a 
        <?php echo $authorized_role; ?> for the 
        <?php echo get_bloginfo('name'); ?>,
        please 
        <a href="https://itservicedesk.wrdsb.ca/ITServiceDesk.WebAccess/wd/object/create.rails?class_name=RequestManagement.Request&lifecycle_name=NewProcess33&object_template_name=NewTemplate101">log an ITService Desk ticket</a>
        requesting access to the <?php echo get_bloginfo('name'); ?>
        section of the Staff Intranet.
    </p>
</div>
