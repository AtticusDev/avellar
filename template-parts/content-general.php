<?php
/**
 * Template part for displaying page content in general.php
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



</article><!-- #post-## -->



