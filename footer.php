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


	<footer id="colophon" class="site-footer">

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
						<p><?php the_field('contact_info', 'option'); ?></p>
						<p><a href="/privacy-policy/">Privacy policy</a></p>

						<p>&copy; <?php bloginfo( 'name' );								
							echo ' - ';
							echo date("Y"); ?>
						</p>
					</div><!-- .site-info -->
				</div>
			</div>
		</div><!--  .container -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
