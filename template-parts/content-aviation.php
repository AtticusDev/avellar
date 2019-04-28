<?php
/**
 * Template part for displaying page content in aviation.php
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
			<div class="container booking-wrapper">
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

	<div class="service-wrapper">
		<div class="container-fluid service-nav-container">
			<div class="row">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div id="service-menu">
								<nav class="navbar navbar-expand-lg justify-content-center topNav topNavBar">
									<?php
							        $args = array(
						              'theme_location' => 'secondary',
						              'depth'      => 2,
						              'container'  => false,
						              'menu_class'     => 'navbar-nav',
						              'menu_id' => 'menu-top-menu-home',
						              'walker'     => new Bootstrap_Walker_Nav_Menu()
						              );
						            if (has_nav_menu('primary')) {
						              wp_nav_menu($args);
						            }
									?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- START MED BLOCK -->
	<div class="med-block pilot">
		<a id="pilot"></a>
		<div class="container-fluid mb-5">
			<div class="row">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<h2 class="blue">Pilot medicals</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid service-grey">
			<div class="row">

			<?php
			$args = array(
			 'post_type' => 'medical',
			 'category_name' => 'pilot-medical',
			 'order' => 'ASC' 
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>

				<div class="container medical-panel">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="d-flex justify-content-between">
								<h3><?php the_title(); ?></h3>
								<a href="/contact/" class="btn book-button">Book now</a>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-10">
							<h4>What you need to know</h4>
							<p><?php the_content(); ?></p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="d-flex justify-content-between">
								<div><h4>Costs</h4>
									<p><?php the_field('costs'); ?></p>
								</div>
								<div class="download-wrapper">
									<h4>Downloads</h4>

									<?php 
									$posts = get_field('downloads');
									if( $posts ): ?>
								    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							        <?php setup_postdata($post);
							        ?>

										<div class="download-item">
											<div class="download-link">
												<a href="<?php the_field('file'); ?>">
													<?php the_title(''); ?>
												</a>
											</div>
										</div>

								    <?php endforeach; ?>
								    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>						

								</div>

							</div>
						</div>
					</div>
				</div>

			<?php
				endwhile;
				wp_reset_query();
			?>
			</div>
		</div>
	</div> <!-- END MED BLOCK -->

<!-- START MED BLOCK -->
	<div class="med-block pilot">
		<a id="air-traffic-control"></a>
		<div class="container-fluid mb-5">
			<div class="row">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<h2 class="blue">Air traffic controllers</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid service-grey">
			<div class="row">

			<?php
			$args = array(
			 'post_type' => 'medical',
			 'category_name' => 'air-traffic-controllers',
			 'order' => 'ASC' 
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>

				<div class="container medical-panel">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="d-flex justify-content-between">
								<h3><?php the_title(); ?></h3>
								<a href="/contact/" class="btn book-button">Book now</a>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-10">
							<h4>What you need to know</h4>
							<p><?php the_content(); ?></p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="d-flex justify-content-between">
								<div><h4>Costs</h4>
									<p><?php the_field('costs'); ?></p>
								</div>
								<div class="download-wrapper">
									<h4>Downloads</h4>

									<?php 
									$posts = get_field('downloads');
									if( $posts ): ?>
								    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							        <?php setup_postdata($post);
							        ?>

										<div class="download-item">
											<div class="download-link">
												<a href="<?php the_field('file'); ?>">
													<?php the_title(''); ?>
												</a>
											</div>
										</div>

								    <?php endforeach; ?>
								    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>						

								</div>

							</div>
						</div>
					</div>
				</div>

			<?php
				endwhile;
				wp_reset_query();
			?>
			</div>
		</div>
	</div> <!-- END MED BLOCK -->	

<!-- START MED BLOCK -->
	<div class="med-block pilot">
		<a id="cabin-crew"></a>
		<div class="container-fluid mb-5">
			<div class="row">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<h2 class="blue">Cabin Crew</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid service-grey">
			<div class="row">

			<?php
			$args = array(
			 'post_type' => 'medical',
			 'category_name' => 'cabin-crew',
			 'order' => 'ASC' 
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>

				<div class="container medical-panel">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="d-flex justify-content-between">
								<h3><?php the_title(); ?></h3>
								<a href="/contact/" class="btn book-button">Book now</a>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-10">
							<h4>What you need to know</h4>
							<p><?php the_content(); ?></p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="d-flex justify-content-between">
								<div><h4>Costs</h4>
									<p><?php the_field('costs'); ?></p>
								</div>
								<div class="download-wrapper">
									<h4>Downloads</h4>

									<?php 
									$posts = get_field('downloads');
									if( $posts ): ?>
								    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							        <?php setup_postdata($post);
							        ?>

										<div class="download-item">
											<div class="download-link">
												<a href="<?php the_field('file'); ?>">
													<?php the_title(''); ?>
												</a>
											</div>
										</div>

								    <?php endforeach; ?>
								    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>						

								</div>

							</div>
						</div>
					</div>
				</div>

			<?php
				endwhile;
				wp_reset_query();
			?>
			</div>
		</div>
	</div> <!-- END MED BLOCK -->
	<div class="footer-space">
	</div>


</article><!-- #post-## -->



