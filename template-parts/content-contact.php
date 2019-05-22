<?php
/**
 * Template part for displaying page content in contact.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Devonshire
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="homeImg-parallax">
		<div class="container-fluid home-banner homeImg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
		</div>
		<div class="home-content-wrapper">
			<div class="row justify-content-end">
				<div class="col-md-8 col-lg-9 col-xl-10 service-page-title">
					<div class="trigger-badge">
					<h1 class="underline text-white"><?php
						the_title()
					?>
					</h1>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-10 col-xl-10">

						<div class="form-wrapper">
							<h3 style="margin-bottom: 10px; margin-left: 5px;">Request a booking</h3>
							<?php
								echo do_shortcode('[gravityform id=1 name=Contact title=false description=false]');
							?>
						</div>

					</div>
				</div>
			</div>
		</div> <!-- end content wrapper -->
	</div> <!-- end parallax -->
	<div class="container-fluid contact-panel">
		<div class="row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4">
						<h2>Contact details</h2>
						<?php the_field('address'); ?>
						<a href="https://goo.gl/maps/fUv8Sv1qTro" class="btn book-button">Get directions</a>
					</div>
					<div class="col-md-4">
						<h2>How to find us</h2>
						<?php the_field('directions'); ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bcg-parallax">
		<?php $mapImg = get_field('contact_map'); ?>
		<div class="bcg" style="background-image: url('<?php echo $mapImg; ?>')"></div>
	</div>



</article><!-- #post-## -->



