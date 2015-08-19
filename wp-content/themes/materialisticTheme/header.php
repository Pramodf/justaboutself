<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pramod lapi
 * Date: 7/25/15
 * Time: 5:22 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<html>
<head>
<title><?php bloginfo('name'); ?></title>
<meta type="description" content="<?php bloginfo('description'); ?>" >
<meta type="keywords" content="<?php bloginfo('description'); ?>" >
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/materialize.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" type="text/css">
<style>

    .nav-wrapper li {
        font: 400 100px/1.3 'Lobster Two', Helvetica, sans-serif;
        color: #2b2b2b;
        text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0,0,0,0.15);
    }
    nav ul a {
        color: #fff;
        display: block;
        font-size: 1.5rem;
        padding: 15px;
    }
</style>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/materialize.min.js"></script>
    <script>
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
        })

    </script>
</head>
<body>
<div class="container" style="width: 90%;">
    <nav>
        <div class="nav-wrapper">
            <a href="http://www.justaboutself.com/" class="brand-logo MT15 ML10"><img alt="JUST ABOUT SELF" src="http://www.justaboutself.com/wp-content/uploads/2015/03/logo.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            <?php get_Menu(); ?>
        </div>
    </nav>
    <!-- Page Content goes here -->



