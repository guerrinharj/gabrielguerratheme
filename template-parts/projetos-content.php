<div class="projetos-overlay overlay <?php the_content()?>">
				<div class="container">
					<div class="overlay-titulo artista">
						<p><?php the_title()?></p>
					</div>

					<div class="releases">
						<ul class="discos">

							<?php 			
							$args = array(
								'posts_per_page' => 40,
								'category_name' => the_field('data'),
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
            
            <?php the_title()?>
            <?php the_content()?>