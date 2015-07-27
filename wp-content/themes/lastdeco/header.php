<?php
/**
* The Header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package Illustratr
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="http://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,400italic,700' rel='stylesheet' type='text/css'>
	<style type="text/css" media="screen">
	@import url(<?php bloginfo('stylesheet_url'); ?>);
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
		</header><!-- #masthead -->
		<?php wp_nav_menu(array('primary'));?>
		<div id="spinner"></div>

		<div id="content" class="site-content">
