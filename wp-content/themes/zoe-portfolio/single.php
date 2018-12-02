<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zoe-portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">
				<div class="row">
					<div class="col-12 d-flex flex-column justify-content-center">
						
						
						 <?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content-page', get_post_type() );

						endwhile; // End of the loop.
						?> 
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
