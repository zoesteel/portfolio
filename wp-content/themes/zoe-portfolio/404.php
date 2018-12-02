<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package zoe-portfolio
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-12 d-flex justify-content-center">

			<div id="primary" class="content-area">
				<main id="main" class="site-main">

					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'zoe-portfolio' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'zoe-portfolio' ); ?></p>
							<div class="col-12 d-flex justify-content-center">
							<?php
								get_search_form();
							?>
							</div>
							<br />
							<?php 
								the_widget( 'WP_Widget_Recent_Posts' );
							?>
							
							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'zoe-portfolio' ); ?></h2>
								<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
								?>
								</ul>
							</div><!-- .widget -->

						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php
get_footer();
