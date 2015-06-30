<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Last_Deco
 */
?>
<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php the_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrap">
		<header>
			<h1><a><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
			<?php wp_nav_menu(array('theme_location' => 'main_menu'));?>
		</header>
