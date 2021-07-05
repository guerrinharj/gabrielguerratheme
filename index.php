<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gabriel_Guerra_Theme
 */
 
get_header();
?>

	<main id="primary" class="site-main">

	<div class="overlays">

		<div class="close">
    		&#8592;
  		</div>
  
		<div class="back">
			&#8592;
		</div>
	
		
    		 
		<div class="projetos-overlay overlay brasileiro-garantido">
				<div class="container">

				<div class="overlay-titulo" id="titulo-menuprojects">
					<span>DISCOGRAFIA</span>
				</div>

					<div class="releases">
						<ul class="discos">
							<?php 			
							$args = array(
								'posts_per_page' => 100,
								'order' => 'DESC',
							);

							$loop = new WP_Query( $args ); 
							
							if ( $loop->have_posts() ) : 
								while ( $loop->have_posts() ) : $loop->the_post(); 
								get_template_part('template-parts/releases-content');
								endwhile; 
							endif; 
							?>	
						</ul>
					</div>
					
				</div>
			</div>


		<div class="trilhas-overlay overlay">
			<div class="container center-overlay-titulo">	

				<div class="overlay-titulo menuol" id="titulo-overlay-trilhas">
					<span class="bb">TRILHAS</span>
				</div>


				<div class="trilhas-list">	
							
						<?php 
				
						$args = array(
							'post_type' => 'trilhas',
							'posts_per_page' => 60,
							'order' => 'DESC'
						);

						$loop = new WP_Query( $args ); 
						
						if ( $loop->have_posts() ) : 
							while ( $loop->have_posts() ) : $loop->the_post(); 
							get_template_part('template-parts/trilhas-content');
							endwhile; 
						endif; 
						?>
	
				</div>

			</div>
		</div>
					


		<div class="outros-overlay overlay">

    		<div class="container center-overlay-titulo">

					<div class="overlay-titulo menuol" id="titulo-overlay-outros">
						<span class="bb">OUTROS</span>
					</div>

					<div class="outros-list"> 

						<?php 
					
						$args = array(
							'post_type' => 'outros',
							'posts_per_page' => 60,
							'order' => 'DESC'
						);

						$loop = new WP_Query( $args ); 
						
						if ( $loop->have_posts() ) : 
							while ( $loop->have_posts() ) : $loop->the_post(); 
							get_template_part('template-parts/outros-content');

							
                    		
                  

							endwhile; 
						endif; 
						?>


					</div>	

			</div>	
			

		</div>	

		

		<?php get_template_part('template-parts/sobre-content'); ?>

		
		
		

	</div>

		<?php get_template_part('template-parts/gg-svg-content'); ?>

		<div class="embed-container">
		
							<?php 			
							$args = array(
								'posts_per_page' => 200,
								'order' => 'ASC'
							);

							$loop = new WP_Query( $args ); 
							
							if ( $loop->have_posts() ) : 
								while ( $loop->have_posts() ) : $loop->the_post(); 
								get_template_part('template-parts/embed-content');
								endwhile; 
							endif; 
							?>	    
	
							<?php 			
							$args = array(
								'post_type' => 'outros',
								'posts_per_page' => 200,
								'order' => 'ASC'
							);

							$loop = new WP_Query( $args ); 
							
							if ( $loop->have_posts() ) : 
								while ( $loop->have_posts() ) : $loop->the_post(); 
								get_template_part('template-parts/embedoutro-content');
								endwhile; 
							endif; 
							?>	    
        </div>

	</main><!-- #main -->

<?php
get_footer();