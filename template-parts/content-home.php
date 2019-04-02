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
	<div class="container-fluid home-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover;">

		<div class="row justify-content-end">
			<div class="col-md-8 col-lg-9 col-xl-10 introText">
				<?php
					the_content();
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
													<button href="<?php echo $link; ?>">Read More</button>
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


</article><!-- #post-## -->



