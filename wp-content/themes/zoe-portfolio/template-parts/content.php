<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zoe-portfolio
 */

?>

<div class="col-12 col-md-6 col-xl-4">

	
<div class="single-post">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php zoe_portfolio_post_thumbnail(); ?>
	
	
		<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
<a href="<?php echo get_permalink(); ?>">
		<div class="entry-content">
			<?php
				the_excerpt( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'zoe-portfolio' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zoe-portfolio' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</article>
		<footer class="entry-footer">
			<?php zoe_portfolio_entry_footer(); ?></a>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->	

</div><!-- end col -->
</div>