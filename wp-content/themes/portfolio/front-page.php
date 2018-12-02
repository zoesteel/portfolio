<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- <div class="button"> -->
		<!-- <img src="<?php bloginfo("template_url"); ?>/images/road.jpg" alt="bridge over ocean" class="main-img"> -->
		<!-- <img src="<?php bloginfo("template_url"); ?>/images/button.png" alt="hello button" class="button-img"></div> -->
				

			
				<section id="one" data-color="#FFF">
					
					<?php
					$post_id = 5;
					$queried_post = get_post($post_id);
					?>
					<h2><?php echo $queried_post->post_title; ?></h2>
					<?php echo $queried_post->post_content; 
					get_template_part( 'template-parts/content', 'page' );			
					if ( has_post_thumbnail() ) {
						echo "<div class='thumbnail'>";
						the_post_thumbnail();
						echo "</div>";
					}?>
				 	
				</section>
			

				<!-- <section id="two" data-color="#5f9290"> -->
				  <h2>Section Two</h2>
				

				</section>

				<!-- <section id="three" data-color="#66afb9"> -->
				  <h2>Section Three</h2>
				</section>

				<!-- <section id="four" data-color="#1b9eae"> -->
				  <h2>Section Three</h2>
				</section>

				<!-- <section id="five" data-color="#146d7c"> -->
				  <h2>Section Three</h2>
				</section>

			<!--END OF BLOG--></div>
						<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				
				if ( has_post_thumbnail() ) { 
				  the_post_thumbnail();
				}
				

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
