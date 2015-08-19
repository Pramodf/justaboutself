<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package upTown
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-57210532-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	
	<div id="masthead-wrap" class="site-header-wrap wrap">
	
		<header id="masthead" class="site-header" role="banner">
    	    
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div><!-- #site-branding -->
			
			<?php $tag = is_front_page() ? 'h1' : 'div'; ?>
			<<?php echo $tag; ?> class="site-description"><?php bloginfo( 'description' ); ?></<?php echo $tag; ?>>
			
			<?php if( get_option( 'header-right' ) ) { ?>
			
				<div class="site-header-right">
				<?php echo get_option( 'header-right' ); ?>
				</div>
			
			<?php } ?>
    	    
		</header><!-- #masthead -->
	
	</div><!-- #masthead-wrap -->
	
	<div id="site-navigation-wrap" class="main-navigation-wrap wrap">
	
		<nav id="site-navigation" class="main-navigation clear" role="navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			
		</nav><!-- #site-navigation -->
	
	</div><!-- #site-navigation-wrap -->
        
	<?php get_template_part( 'content', 'subheader' ); ?>
	
	<div id="content-wrap" class="site-content-wrap">

		<div id="content" class="site-content">
