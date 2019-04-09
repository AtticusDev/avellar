<?php
/**
 * Template part for displaying page content in home.php
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
					<?php
						the_content();
					?>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-2 formTitle">
						<h3 style="margin-bottom: 0px;">Request a booking</h3>
					</div>
					<div class="col-md-10">
						<div class="form-wrapper">
							<?php
								echo do_shortcode('[gravityform id=1 name=Contact title=false description=false]');
							?>
						</div>

					</div>
				</div>
			</div>
		</div> <!-- end content wrapper -->
	</div> <!-- end parallax -->
	<div class="container-fluid mt-5">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<?php
					the_field('introduction');
				?>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="container" id="serviceWrapper">
				<div class="row text-center justify-content-center">
				<?php if( have_rows('services') ): 
					 while( have_rows('services') ): the_row(); 
					// vars
					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$link = get_sub_field('link');
					$image = get_sub_field('image');
					$i = $i+1;

				?>
					<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="serviceBlock">
								<a href="<?php echo $link; ?>">
									<div class="box<?php echo $i; ?>">
										<div class="serviceImage" style="background-image: url('<?php echo $image; ?>'); ">
										</div>
										<div class="serviceContentWrapper">
											<div class="titleBG"><h3 class="text-white"><?php echo $title ?></h3>
												<div class="descBlock">
													<p><?php echo $description; ?></p>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
					</div>



				<?php endwhile;
				endif; ?>
			</div>
		</div>

		</div>
	</div>
	<div class="bcg-parallax">
		<?php $officeImg = get_field('facility_image'); ?>
		<div class="bcg" style="background-image: url('<?php echo $officeImg; ?>')"></div>
		<div class="content-wrapper">
			<div class="caseStudyIntro"><h1>Our facilities</h1></div>
		</div>
	</div>


</article><!-- #post-## -->



