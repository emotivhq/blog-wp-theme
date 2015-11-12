<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package giftstarter
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<title>GiftStarter <?php wp_title( '|', true, 'left' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="//brick.a.ssl.fastly.net/Merriweather:400,900,400i,900i/Open+Sans:300,400,700,300i,400i,700i" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700" rel="stylesheet" type="text/css">

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="giftstarter <?php bloginfo( 'name' ); ?> Feed" href="<?php echo site_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/devices/giftstarter-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/giftstarter-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/devices/giftstarter-icon.png" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<nav id="nav-wrap" role="navigation">
		<ul class="top-nav">
			<li class="current"><a href="http://giftstarter.com">GiftStarter</a></li>
			<li><a class="rollover giving" href="http://blog.giftstarter.com">Giving</a></li>
			<li rel="open"><a class="rollover open" href="http://blog.giftstarter.com/open">Open</a></li>
			<li rel="i/o"><a class="rollover i/o" href="http://blog.giftstarter.com/io">I/O</a></li>
			<li rel="joy" class="hidden"><a class="rollover joy">Joy</a></li>
		</ul>
		<form class="search-nav-form" role="search" method="get" action="http://blog.giftstarter.com">
  			<input class="search-nav-field" type="search" placeholder="Search" value="" name="s" title="Search:">
  			<input class="search-nav-submit" type="submit" value=" ">
		</form>
	</nav><!-- #navigation -->

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header <?php bloginfo( 'name' ); ?>" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home <?php bloginfo( 'name' ); ?>" class="site-title"><span class="logotype"></span><?php bloginfo( 'name' ); ?></a>
			<div class="tagline"><?php bloginfo( 'description' ); ?></div>
		</div>

		<div class="header-sign-up">GiftStarter makes group gifting fun and easy. 
			<a href="http://giftstarter.com/">Sign Up. It’s Free.</a>
		</div>

	</header><!-- #masthead / .site-header-->

	<div id="content" class="site-content">
