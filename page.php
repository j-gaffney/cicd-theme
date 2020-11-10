<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div style="margin: 0 calc(10% + 60px); ">
			<!-- <img src="https://media.giphy.com/media/An95xQZRS1B1S/source.gif" width="400px"  height="auto"  /> -->
			<div style="border: 1px dashed #767676; padding: 20px; display:flex; align-items: center; justify-content: center; min-height: 200px; max-width: 600px">
				<h3 style="color: #767676">
					Coming Soon... <i>a gif!</i>
				</h6>
			</div>
		</div>

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
