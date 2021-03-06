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
	<div class="container-fluid about-header">

		<div class="row justify-content-center">
			<div class="col-sm-10 col-md-9 col-lg-6 col-xl-6 about-panel">
				<div class="trigger-badge">
					<h1 class="underline white">
					<?php
						the_title();
					?>
					</h1>
					<?php
						the_content();
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid team-panel">
		<div class="row justify-content-center">
			<div class="col-sm-10 col-md-8 col-lg-6 col-xl-6">
				<h1 class="underlineB">
					Our team
				</h1>
				<div class="d-flex flex-wrap">
						<?php
						$args = array(
						 'post_type' => 'doctor',
	//					 'category_name' => 'pilot-medical',
						 'order' => 'ASC' 
						);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						?>
						<div class="consultant-name">
							<a href="<?php the_permalink(); ?>">
							<?php echo the_title(); ?>
							</a>
						</div>
						<?php
							endwhile;
							wp_reset_query();
						?>
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
	<div class="container-fluid team-panel">
		<div class="row justify-content-center">
			<div class="col-sm-10 col-md-8 col-lg-6 col-xl-6">
				<h1 class="underlineB">
					Our facilities
				</h1>
					<h4><?php the_field('avellar_title'); ?></h4>
					<?php the_field('facility_description'); ?>
			</div>
		</div>
	</div>



</article><!-- #post-## -->



