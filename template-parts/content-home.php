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
			<div class="container">
				<div class="row">
					<div class="col-md-2 siteLogo"></div>
					<div class="col-md-10 topLine"></div>
				</div>
				<div class="row justify-content-end">
					<div class="col-md-10 introText">
						<?php
							the_content();
						?>
					</div>
				</div>
			</div>
	</div>
	<div class="container serviceContainer">
		<div class="row">
				<?php if( have_rows('services') ): 
					 while( have_rows('services') ): the_row(); 
					// vars
					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$link = get_sub_field('link');
					$image = get_sub_field('image');
				?>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<div class="animation-element fade-up">
						<div class="serviceBlock d-flex align-items-end" style="background-image: url('<?php echo $image; ?>'); background-size: cover; background-position: center center;">
							<div class="container">
								<div class="newsSnippet">
									<h4 class="gold underline-gold"><?php echo $title; ?></h4>
									<p class="mb-1"><?php echo $description; ?></p>
									<a href="<?php echo $link; ?>" class="btn smallGoldWhiteBtn">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php endwhile;
				endif; ?>

		</div>
	</div>


</article><!-- #post-## -->



