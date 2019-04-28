<?php
/**
 * Template part for displaying page content in space.php
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
					<h1 class="underline text-white"><?php
						the_title()
					?>
					</h1>
					</div>
				</div>
			</div>
		</div> --> <!-- end content wrapper -->
	</div> <!-- end parallax -->
	<div class="container-fluid service-grey">
		<div class="row">
			<div class="container medical-panel">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="d-flex justify-content-between">
							<h3>Astronauts</h3>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<?php the_field('astronauts'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid service-white">
		<div class="row">
			<div class="container medical-panel">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="d-flex justify-content-between">
							<h3>Space tourists</h3>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<?php the_field('space_tourism'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="margin-top: 5rem; height: 100px;">
		<div class="row">
			<div class="container">
			</div>
		</div>
	</div>



</article><!-- #post-## -->



