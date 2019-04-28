<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Avellar
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-4">
					<div class="footerLogo">
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-4">		
					<div class="site-info">
						<p>The Bower Building<br />
						Stockley Park, 4 Roundwood Ave,<br />
						Hayes, Uxbridge UB11 1BQ</p>
						<p><a href="mailto:bookings@avellarmedical.com">bookings@avellarmedical.com</a>
						<p>&copy; <?php bloginfo( 'name' );
								echo ' - ';
								echo date("Y"); ?></p>
					</div><!-- .site-info -->
				</div>
			</div>
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
