<?php
/**
 * Template part for displaying page content in condition.php
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
	<div class="container service-nav-container">
		<div class="row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div id="service-menu">
							<ul class="serviceNav">
								<li class="nav-item"><a href="#" class="nav-link">Pilot Medicals</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Cabin Crew</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Air Traffic Controllers</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Air Side Driving</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
			<div class="container medical-panel">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="d-flex justify-content-between">
							<h3>Class 1 medicals</h3>
							<a href="/contact/" class="btn book-button">Book now</a>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<h4>What you need to know</h4>
						<p>From the 1st February 2019 mandatory drug testing is being introduced via the CAA. The cost for this will be an additional £84+VAT. Fees are payable at the time of booking credit/debit card, or cash. Initial candidates will be also required to see our optometrist, undergo an ECG examination, blood tests comprising a haemoglobin and cholesterol estimation, an audiogram, spirometry, urinalysis and a full comprehensive clinical examination.</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="d-flex justify-content-between">
							<div><h4>Costs</h4>
								<p>£460 + VAT.<br />
								(excluding referrals, casework etc if reqd.)</p>
							</div>
							<div class="download-wrapper">
								<h4>Downloads</h4>
								<div class="download-item">
									<div class="download-link">
									Application form (Form MED 160)
									</div>
								</div>
								<div class="download-item">
									<div class="download-link">
									For ATCOs: Form Euro3 MED 162
									</div>
								</div>
								<div class="download-item">
									<div class="download-link">
									CAA: CAA Medical Standards and Guidance
									</div>
								</div>
							</div>

						</div>
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
							<h3>Class 2 medicals</h3>
							<a href="/contact/" class="btn book-button">Book now</a>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<h4>What you need to know</h4>
						<p>From the 1st February 2019 mandatory drug testing is being introduced via the CAA. The cost for this will be an additional £84+VAT. Fees are payable at the time of booking credit/debit card, or cash. Initial candidates will be also required to see our optometrist, undergo an ECG examination, blood tests comprising a haemoglobin and cholesterol estimation, an audiogram, spirometry, urinalysis and a full comprehensive clinical examination.</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="d-flex justify-content-between">
							<div><h4>Costs</h4>
								<p>£460 + VAT.<br />
								(excluding referrals, casework etc if reqd.)</p>
							</div>
							<div class="download-wrapper">
								<h4>Downloads</h4>
								<div class="download-item">
									<div class="download-link">
									Application form (Form MED 160)
									</div>
								</div>
								<div class="download-item">
									<div class="download-link">
									For ATCOs: Form Euro3 MED 162
									</div>
								</div>
								<div class="download-item">
									<div class="download-link">
									CAA: CAA Medical Standards and Guidance
									</div>
								</div>
							</div>

						</div>
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



