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



		<ul class="menu-projects menuprojects-overlay overlay">

			<div class="menu-projects-container">

				<div class="overlay-titulo" id="titulo-menuprojects">
					<span>PROJETOS</span>
				</div>

				<?php 
		
				$args = array(
					'post_type' => 'projetos',
					'posts_per_page' => 20,
					'order' => 'ASC'
				);

				$loop = new WP_Query( $args ); 
				
				if ( $loop->have_posts() ) : 
					while ( $loop->have_posts() ) : $loop->the_post(); 
					get_template_part('template-parts/menu-projects-content');
					endwhile; 
				endif; 
				?>

			</div>

		</ul>
	
		
    		
		<div class="projetos-overlay overlay brasileiro-garantido">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Brasileiro Garantido</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'brasileiro-garantido',
								'order' => 'ASC'
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



			<div class="projetos-overlay overlay cavalcantissimos">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Cavalcantissimos</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'cavalcantissimos',
								'order' => 'ASC'
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



			<div class="projetos-overlay overlay dinheiro-infinito-revival">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Dinheiro Infinito Revival</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'dinheiro-infinito-revival',
								'order' => 'ASC'
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



			<div class="projetos-overlay overlay dorgas">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Dorgas</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'dorgas',
								'order' => 'ASC'
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



			<div class="projetos-overlay overlay epicentro-do-bloquinho">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Epicentro do Bloquinho</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'epicentro-do-bloquinho',
								'order' => 'ASC'
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


			<div class="projetos-overlay overlay finalzinho-chegando">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Finalzinho Chegando</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'finalzinho-chegando',
								'order' => 'ASC'
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


			<div class="projetos-overlay overlay garageiros-do-abismo">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Garageiros do Abismo</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'garageiros-do-abismo',
								'order' => 'ASC'
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


			<div class="projetos-overlay overlay guerrinha">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Guerrinha</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'guerrinha',
								'order' => 'ASC'
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


			<div class="projetos-overlay overlay relacoes-publicas">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Relações Públicas</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'relacoes-publicas',
								'order' => 'ASC'
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


			<div class="projetos-overlay overlay repetentes-2008">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Repetentes 2008</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'repetentes-2008',
								'order' => 'ASC'
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


			<div class="projetos-overlay overlay seculos-apaixonados">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Séculos Apaixonados</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'seculos-apaixonados',
								'order' => 'ASC'
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


			<div class="projetos-overlay overlay sergio">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Sérgio</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'sergio',
								'order' => 'ASC'
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

			<div class="projetos-overlay overlay vamos-desistir">
				<div class="container">
					<div class="overlay-titulo artista">
						<p>Vamos Desistir</p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => 'vamos-desistir',
								'order' => 'ASC'
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

		<?php get_template_part('template-parts/gg-svg-content'); ?>


		
		
		

	</div>

	</main><!-- #main -->

<?php
get_footer();