<?php
/**
 * Template Name: General

 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.

 Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Avellar
 */

get_header(); ?>


					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'general' );


					endwhile; // End of the loop.
					?>

<?php
get_footer();
