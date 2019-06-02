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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141018483-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141018483-1');
</script>

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
			<a href="/"><div class="siteLogo"></div></a>
			<div class="logoBadge"><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/avellar-badge-ol.svg" alt="avellar medical logo"></a></div>
			<div class="siteNumberWrapper flex-wrap flex-sm-nowrap">
				<div class="siteNumber"><a href="tel:07760265436">07760 265 436</a></div>
				<div class="sm-block">
						
							<a href="https://www.linkedin.com/company/avellar-medical/" class="c-link" aria-label="Linkedin" target="_blank"><svg class="c-icon"><use xlink:href="#icon--linkedin"></use></svg></a>
							

<!--							<a href="https://twitter.com/AvellarMedical" class="c-link" aria-label="Twitter"><svg class="c-icon"><use xlink:href="#icon--twitter"></use></svg></a>
-->
							<a href="https://www.facebook.com/Avellar-Medical-1331484310366246/" class="c-link" aria-label="Facebook" target="_blank"><svg class="c-icon"><use xlink:href="#icon--facebook"></use></svg></a>
				</div>
			</div>

		</div>
	</div>
</div>

<svg style="display: none">
	<symbol id="icon--linkedin" viewBox="0 0 50 50">
	<path d="M15.3,12.2c0-0.8,0-1.3,0-1.8c0-0.6-0.1-0.8-0.7-0.8c-1.4,0-2.7,0-4.1,0c-0.5,0-0.6,0.1-0.6,0.6
	c0,6.1,0,12.1,0,18.2c0,0.5,0.1,0.6,0.6,0.6c1.4,0,2.9,0,4.3,0c0.7,0,0.9-0.2,0.9-0.9c0-3.1,0-6.2,0-9.3c0-1,0.1-1.9,0.5-2.8
	c0.6-1.2,1.8-1.9,3.2-1.7c1.4,0.2,2.1,0.9,2.4,2.4c0.2,0.7,0.2,1.4,0.2,2.1c0,3.1,0,6.2,0,9.3c0,0.7,0.2,0.9,0.9,0.9
	c1.4-0.1,2.8,0,4.2,0c0.6,0,0.7-0.2,0.7-0.7c0-3.7,0-7.4,0-11.1c0-0.8-0.1-1.6-0.2-2.4c-0.4-2.9-1.9-4.8-4.3-5.4
	C20.1,8.7,17.4,9.1,15.3,12.2 M6.2,19.3c0-3,0-6,0-9c0-0.6-0.1-0.8-0.7-0.8c-1.5,0-2.9,0-4.4,0c-0.5,0-0.7,0.1-0.7,0.7
	c0,6,0,12.1,0,18.1c0,0.6,0.2,0.7,0.7,0.7c1.4,0,2.9,0,4.3,0c0.6,0,0.7-0.2,0.7-0.8C6.2,25.3,6.2,22.3,6.2,19.3 M6.6,3.6
	C6.7,1.6,5.2,0,3.4,0C1.6-0.1,0,1.6,0,3.5S1.5,7,3.3,7.1C5,7,6.6,5.5,6.6,3.6"/>
	</symbol>

	<symbol id="icon--facebook" viewBox="0 0 50 50">
	<path d="M0,9.5v5.2h2.7v14.5h5.7V14.6h3.9c0.2-1.7,0.3-3.4,0.5-5.1H8.4c0-0.9,0-1.8,0-2.7c0-1.4,0.3-1.7,1.7-1.7
	c0.3,0,0.6,0,0.9,0h1.7V0C10.8,0.1,9,0,7.2,0.2C5.1,0.4,3.7,1.7,3.1,3.9C2.9,4.7,2.8,5.7,2.7,6.5c-0.1,1,0,2,0,3H0z"/>
	</symbol>
	<symbol id="icon--twitter" viewBox="0 0 50 50">
	<path d="M11,28.2h-1c-0.1,0-0.3,0-0.4,0c-0.5,0-1-0.1-1.5-0.1c-0.5-0.1-1-0.1-1.5-0.2c-0.9-0.2-1.7-0.4-2.5-0.7
	c-1.4-0.5-2.8-1.2-4-2c0,0-0.1,0-0.1-0.1l0,0c0.9,0.1,1.7,0.1,2.6,0c0.9-0.1,1.7-0.2,2.6-0.5c0.8-0.3,1.7-0.6,2.4-1
	c0.8-0.4,2.1-1.3,2.2-1.5c-1.4,0-2.7-0.5-3.8-1.4c-1.1-0.9-1.9-2.1-2.4-3.5c0.5,0.1,1,0.1,1.5,0.1s1-0.1,1.5-0.2
	c-3.6-0.8-5.4-4.2-5.3-7c0.5,0.3,0.9,0.5,1.4,0.6s1,0.2,1.5,0.2C3.3,10.2,2.5,9.3,2,8.3C1.5,7.2,1.2,6.1,1.3,4.9
	c0-1.2,0.3-2.3,0.9-3.4c1.7,2.2,3.8,4,6.1,5.2c2.4,1.3,4.9,2,7.6,2.1c0,0,0,0,0-0.1c-0.2-0.8-0.2-1.5-0.1-2.3
	c0.1-0.6,0.2-1.3,0.4-1.9c0.5-1.2,1.2-2.2,2.1-3c1.2-0.9,2.5-1.4,3.9-1.5c0.1,0,0.3,0,0.4,0l0,0c0.4,0,0.8,0.1,1.2,0.2
	c1,0.2,1.9,0.7,2.7,1.4c0.2,0.2,0.4,0.4,0.6,0.6c0,0.1,0.1,0.1,0.2,0.1c0.4-0.1,0.9-0.2,1.3-0.4c1-0.3,1.9-0.7,2.7-1.3h0.1
	c-0.5,1.7-1.5,3-2.9,3.9c1.3-0.2,2.6-0.5,3.8-1.1l0,0c-0.6,0.9-1.2,1.7-1.9,2.4c-0.4,0.4-0.8,0.8-1.3,1.1L29,7c0,0.1,0,0.2,0,0.4
	c0,0.5,0,1,0,1.5s-0.1,1-0.1,1.5c-0.1,0.8-0.2,1.5-0.4,2.2c-0.3,1.5-0.8,2.9-1.5,4.2c-0.5,1.1-1.1,2.1-1.8,3.1
	c-0.8,1.2-1.8,2.3-2.8,3.2c-0.7,0.6-1.4,1.2-2.2,1.7s-1.7,1-2.5,1.4c-1.1,0.5-2.2,0.9-3.3,1.1c-0.6,0.1-1.1,0.2-1.7,0.3
	c-0.4,0-0.7,0.1-1.1,0.1C11.6,28.2,11.3,28.2,11,28.2L11,28.2"/>
	</symbol>
</svg>
