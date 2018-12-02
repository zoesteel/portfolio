<?php
/**
 * The template for displaying the footer
 *
 */
 
?>
		</div><!-- #main -->
	</div><!-- #page -->


	
	<footer id="gk-footer" role="contentinfo">

		<div class="social" style="text-align: center">
		<div class="insta" style="text-align: center"><a href="http://instagram.com/zoesteel_" target="_new"><span></span></a></div>
		<div class="twitter" style="text-align: center"><a href="http://twitter.com/zoesteel_" target="_new"><span></span></a></div>
		<div class="linkedin" style="text-align: center"><a href="https://www.linkedin.com/in/zoe-steel-a91a2991" target="_new"><span></span></a></div>
		</div>

		<?php if (is_active_sidebar('bottom')) : ?>
		<div id="gk-bottom" role="complementary">
			<div class="widget-area">
				<?php dynamic_sidebar('bottom'); ?>
			</div>
		</div>
		<?php endif; ?>
		
		<!-- <div id="gk-social">
			<?php // wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'social-menu')); ?>
		</div> -->

		<div id="gk-copyrights">
			<?php do_action('portfolio_credits'); ?>
			
			<p class="copyright"><?php _e('Child theme of the free WordPress Theme designed by ','portfolio'); ?> <a href="https://www.gavick.com">Gavick.com</a></p>
			
		</div><!-- .site-info -->
	</footer><!-- end of #gk-footer -->
	
	<?php wp_footer(); ?>
</body>
</html>
