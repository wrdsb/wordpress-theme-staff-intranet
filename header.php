<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage WRDSB
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (is_front_page()) {?>
        <title><?php bloginfo('name');?></title>
    <?php } else {?>
      <title><?php wp_title('');?> (<?php bloginfo('name');?>)</title>
    <?php }?>

    <link href="https://s3.amazonaws.com/wrdsb-ui-assets/intranet/master.css" rel="stylesheet" media="all">

    <link href="https://s3.amazonaws.com/wrdsb-ui-assets/<?php echo $GLOBALS['wrdsbvars']['asset_version']; ?>/images/icon-60x60.png" rel="apple-touch-icon" />
    <link href="https://s3.amazonaws.com/wrdsb-ui-assets/<?php echo $GLOBALS['wrdsbvars']['asset_version']; ?>/images/icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
    <link href="https://s3.amazonaws.com/wrdsb-ui-assets/<?php echo $GLOBALS['wrdsbvars']['asset_version']; ?>/images/icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
    <link href="https://s3.amazonaws.com/wrdsb-ui-assets/<?php echo $GLOBALS['wrdsbvars']['asset_version']; ?>/images/icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script src="https://s3.amazonaws.com/wrdsb-theme/js/addtohomescreen.min.js"></script>
    <script src="https://s3.amazonaws.com/wrdsb-theme/js/jquery.floatThead.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        $(document).ready(function(){
            $('table.table-fixed-head').floatThead({
            useAbsolutePositioning: false
            });
        });

        $("table").addClass("table table-striped table-bordered");
        $("table").wrap("<div class='table-responsive'></div>");
    </script>


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs.min.css" rel="stylesheet">
    <style>
        .introjs-helperLayer {
            background-color: #555555;
        }
    </style>

    <?php wp_head();?>

    <!-- Google Analytics Tracking Code -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-16094689-22', 'auto');
        ga('require', 'linkid');
        ga('send', 'pageview');
    </script>
</head>
<body id="top">

<div id="site-wide-navigation">

    <!-- persistent global navigation -->
    
    <div id="persistent-nav">
        <div class="mainlinks"><a style="background-image: url(https://wrdsb-ui-assets.s3.amazonaws.com/1/1.0.3/images/wrdsb_people_icon.svg); background-repeat: no-repeat; padding-left: 25px" href="/">main</a> | <a href="/sites/departments/">departments</a> | <a href="/sites/guides/">guides</a> | <a href="/sites/workspaces/">workspaces</a> | <a href="/sites/school-handbooks/">school handbooks</a></div>
        <div class="adminlinks">
            <?php 
                echo wrdsb_show_dashboard_link(); 
                echo wrdsb_show_profile_link(); 
                echo wrdsb_show_logout_link(); 
            ?>
        </div>
    </div>

    <!-- contextual navigation -->

    <?php echo wrdsb_contextual_nav_bar(); ?>

</div>