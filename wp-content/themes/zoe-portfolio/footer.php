<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zoe-portfolio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			
			<div class="row">
				<div class="col-12 contact-me">
					<h2>Contact Me</h2>

					<div class="contactform d-flex justify-content-center">
						<?php $contact='[contact-form-7 id="116" title="Contact form 1 "]'?>
						<?php echo do_shortcode($contact);?>
					
					</div>
				</div>
			</div><!-- end row -->

			<div class="row">
				<div class="col-12 site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'zoe-portfolio' ) ); ?>"><?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'zoe-portfolio' ), 'WordPress' );
					?></a>
					<span class="sep"> | </span>
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'zoe-portfolio' ), 'zoe-portfolio', '<a href="http://zoesteel.com">Zoe Steel</a>' );
					?>
				</div><!-- .site-info -->
			</div><!-- end row -->
		</div><!-- end container-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('.site-images-slider').slick({
    	arrows: true,
    	nextArrow: '<i class="fa fa-chevron-right"></i>',
  		prevArrow: '<i class="fa fa-chevron-left"></i>',

  });
});
</script>
</body>
</html>
