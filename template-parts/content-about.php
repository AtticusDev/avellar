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

		<div class="row justify-content-center">
			<div class="col-md-4 col-lg-6 col-xl-6">

				<?php
					the_content();
				?>
			</div>
		</div>
	</div>


</article><!-- #post-## -->



