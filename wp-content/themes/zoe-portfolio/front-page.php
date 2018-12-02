<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zoe-portfolio
 */

get_header(); ?>

    <div id="primary" class="content-area">
	<main id="main" class="site-main">
    <div class="container">
    	<div class="row">

		    <div class="col-12 aboutme d-flex justify-content-center flex-column align-items-center" id="aboutme">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/woman.png" width="60px" />
    	
	            <h3 class="section-title">About Me</h3>
	            <p>I'm a web developer from Oxford, England. I have been living in Vancouver, Canada for 7 years and graduated from the Technical Web Designer course at British Columbia Institute of Technology in 2016. Since then I have been working as an in-house web developer at Radial Engineering. I enjoy bringing designs to life using various technologies. My strengths are creating responsive websites using HTML and CSS (including using SASS, Flexbox & Bootstrap) but I am also honing my skills in JavaScript and trying my hand at Angular 2. In my spare time I love to go hiking, do yoga, and hang out with my cat, Herman.</p>
	        </div> <!-- end about me col -->
	    </div><!-- end row -->

        <hr class="hr">

        <div class="row">
	        <div class="col-12 skills d-flex flex-column align-items-center" id="skills">
	          	<img src="<?php echo get_template_directory_uri(); ?>/images/repair-tools.png" width="60px" />     	

	        	<h3 class="section-title">Skills</h3>
	        	
	        	<div class="skills-ul col-12 col-sm-6 d-flex justify-content-center">
	        		<ul class="col-6 col-sm-3">
	        				<li>HTML5</li>
	        				<li>CSS3</li>
	        				<li>SASS</li>
	        				<li>JavaScript</li>
	        				<li>jQuery</li>
	        				<li>Bootstrap 4</li>
	        				<li>Command Line</li>

	        		</ul>
	        		<ul class="col-6 col-sm-3">
	        				<li>Git</li>
	        				<li>WordPress</li>
	        				<li>PHP</li>
	        				<li>Photoshop</li>
	        				<li>Illustrator</li>
	        				<li>Figma</li>  
	        				<li>Agile</li>

	        		</ul>
	        	</div><!-- end ul div -->
	        	
	        </div><!-- end skills col -->

	     </div><!-- end row -->

	     <div class="row">
	     	<div class="col-12 d-flex justify-content-center">
	     		<p>View my <a href="https://codepen.io/zoesteel/" target="_blank">Codepen</a>.</p>
	     	</div>
	     </div>
        <hr class="hr">

        <div class="row">
	        <div class="col-12 work d-flex flex-column align-items-center" id="work">
	        	<img src="<?php echo get_template_directory_uri(); ?>/images/laptop.png" width="60px" />  

	            <h3 class="section-title">Work</h3>

	        </div>       	
                <?php
                if ( have_posts() ) :

                if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text">
                            <?php single_post_title(); ?></h1>
                    </header>
                
                    <?php
                    endif;

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /*
                        * Include the Post-Format-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                        */
                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>
            </div>
            </div><!-- end  work-->
        </div><!-- end row -->
        
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- container -->
<?php
// get_sidebar();
get_footer();
