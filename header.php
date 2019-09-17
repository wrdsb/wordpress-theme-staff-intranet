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


<style type="text/css">
/** add to ui-intranet **/

@import url('https://fonts.googleapis.com/css?family=Nanum+Gothic|Open+Sans+Condensed:300&display=swap');

#masthead {
  background-color: #62bb46;
}

#navbar { 
  background-color: #39607a; 
}

#masthead .row {
  margin: 0;
}

.my-navbar {
  background-color:#39607a;
  border-radius:0;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:0;
  margin-bottom:10px;
}
.my-sub-navbar {
  background-color:#fff;
  border-radius:0px;
  border-left:0px;
  border-right:0px;
  border-bottom:0px;
  margin-bottom:0px;
/*  min-height:1px; */
}
.my-sub-navbar .navbar-brand {
  float:none;
}
.nav-justified > li > a {
  line-height:28px;
  color:#fff;
  font-weight:bold;
  font-size:16px;
}
.nav >li > a:hover, .nav >li > a:focus {
  background-color:#3881b2;
}
.nav >li.active,
.nav >li.current-page-ancestor,
.nav >li.current_page_ancestor,
.nav >li.current-menu-item,
.nav >li.current_page_item {
  background-color:#3881b2;
}

.nav_current_page_children_container {
  background-color:#e6eff6;
  padding-bottom: 5px;
}

  #sitename {
    font-size: 40px !important;
    font-family: 'Open Sans Condensed', serif !important;
    font-weight:bold;
    color: #fff;
  }

#sitename span {
    color: #005fae;
}

  #sitedescription {
    font-size: 22px;
    letter-spacing: 0;
    font-family: "Nanum Gothic", sans-serif;
    color: #fff;
  }

#staff-shortcut-list a {
  color: #fff;
  background-image: url(https://wrdsb-ui-assets.s3.amazonaws.com/1/1.1.0/images/Pointer.svg);
  background-repeat: no-repeat;
  padding-left: 20px;
  margin-left: -1px;
  font-size: 16px;
}

h1 {
  font-family: 'Open Sans Condensed', sans-serif !important;
  font-weight: bold;
  font-size: 40px;
  color: #62bb46;
}

h2 {
  font-family: 'Nanum Gothic', sans-serif;
  font-size: 22px;
  color: #005fae;
}

p, li, td {
  font-size: 16px;
  line-height: 150%;
}

p.fineprint, p.categories, p.tags, p.postdate {
  font-size: 13px;
}

.staff-shortcuts {
  margin-top:40px;
  position: inherit;
}

.staff-shortcuts a {
  margin:0 8px;
}
.searchbox {
  /*float:left;*/
  /*width:100%;*/
  margin-top:8px;
  float: none;
}
.searchbox input {
  /*width:170px;
  float:left;*/
  width: 266px;
  color:#666;
  padding: 2px 4px;
  margin:0 0 15px 0;
  float: none;
}
.staff-shortcuts .icon-search {
  /*display:inline-block;
  position:relative; */
  left:-22px;
  top:6px;
}

</style>
</head>
<body id="top">

<!-- header.php -->

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