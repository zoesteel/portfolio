<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zoe-portfolio
 */

?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header col-12">					
					<a href="javascript:history.back(1)"><i class="fas fa-chevron-left"></i> Back</a>
				</header><!-- .entry-header -->


				<div class="entry-content">
					
					<h2 class="single-title">
							<?php
								echo the_title(); 	
							 ?>
						</h2>
						<br /><br />
					<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zoe-portfolio' ),
							'after'  => '</div>',
						) );
					?>
				

				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php zoe_portfolio_entry_footer(); ?>
						</div><!-- .entry-content -->
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-<?php the_ID(); ?> -->
	