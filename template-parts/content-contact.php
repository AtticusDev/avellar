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
		<div class="container-fluid home-banner homeImg" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover;">
		</div>
		<div class="home-content-wrapper">
			<div class="row justify-content-end">
				<div class="col-md-8 col-lg-9 col-xl-10 introText">
					<div class="trigger-badge">
					<h1 class="underline"><?php
						the_title()
					?>
					</h1>
					</div>
				</div>
			</div>
			<div class="container booking-wrapper">
				<div class="row justify-content-left">
					<div class="col-md-1">
					</div>
					<div class="col-sm-11 col-md-11">
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
						<p>Avellar Medical
							Stockley Park,<br />
							4 Roundwood Ave, <br />
							Hayes, <br />
							Uxbridge UB11 1BQ</p>
						<p>Tel: 01288 876 543</p>
					</div>
					<div class="col-md-4">
						<h2>How to find us</h2>
						<p>Stockley Park has excellent air, road and rail connections. <br />Click on the button below to help plan your journey.</p>
						<a href="https://goo.gl/maps/fUv8Sv1qTro" class="btn book-button">Get directions</a>

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



