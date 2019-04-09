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
			<div class="col-md-4 col-lg-6 col-xl-6 about-panel">
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
	<div class="container-fluid about-panel">
		<div class="row justify-content-center">
			<div class="col-md-4 col-lg-6 col-xl-6">
				<h1 class="underlineB">
					Our team
				</h1>
				<div class="d-flex flex-wrap">
					<div class="teamList">
						<h4 class="blue">Aviation</h4>
						<p>
						Dr Karuna<br />
						Dr Claire Hunter deputy<br />
						Dr Goolam<br />
						Dr Marcus<br />
						Dr Shalie<br />
						Dr Mike Harrington<br />
						Dr Mike Glandfield<br />
						Pete Hodkin<br />
						</p>
					</div>
					<div class="teamList">
						<h4 class="blue">Specialist</h4>
						<p>
						Dr Chetna<br />
						Dr Moj Fiztpatric<br />
						Dr Karuna<br />
						Dr Shalie<br />
						Dr Amen<br />
						Dr Connolly<br />
						</p>
					</div>
					<div class="teamList">
						<h4 class="blue">Space</h4>
						<p>
						Dr Karuna<br />
						Dr Ryan Anderton<br />
						Dr Pete Hodkin<br />
						Dr Connoly<br />
						</p>
					</div>
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
	<div class="container-fluid about-panel mb-5">
		<div class="row justify-content-center">
			<div class="col-sm-10 col-md-3">
				<h4 class="blue">Avellar Medical</h4>
				<p>
				Situated in Stockley Park the facilities are well equipped for your comfort and convenience, with an onsite cafe, lounge areas, pod desks, conference facilities.</p>
				<p>We hope you enjoy your visit</p>
			</div>
			<div class="col-sm-10 col-md-3">
				<h4>&nbsp;</h4>
				<p class="mb-0">At the centre we have
				<ul><li>a fully equipped examination room.</li>
				<li>Waiting areas</li>
				<li>Refreshments</li>
				<li>Free parking</li>
				<li>Free bus service from Heathrow</li>
				</ul>
			</div>
		</div>
	</div>



</article><!-- #post-## -->



