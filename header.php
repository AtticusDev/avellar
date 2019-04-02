<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Avellar
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="controls">
					<button class="hamburger hamburger--collapse slide-menu-control openbtn" type="button" data-target="test-menu-left" data-action="toggle">
					  <span class="hamburger-box">
					    <span class="hamburger-inner"></span>
					  </span>
					</button>
				    <nav class="slide-menu" id="test-menu-left">
						<?php
								        $args = array(
							              'theme_location' => 'primary',
							              'depth'      => 3,
							              'container'  => false,
							              'menu_class'     => 'navbar-nav',
						/*	              'walker'     => new Bootstrap_Walker_Nav_Menu()*/
							              );
							            if (has_nav_menu('primary')) {
							              wp_nav_menu($args);
							            }
						?>

					</nav>
			</div>
			<div class="siteLogo"></div>
		</div>
	</div>
</div>
<div class="siteNumber">020 8656 0400</div>


