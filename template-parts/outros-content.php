  <div class="outro" data-outroinfo=".<?php the_field('data-outroinfo'); ?>">


				<div class="titulo-outro">

          <span class="link_to_bandcamp titulo-outro" data-embed=".<?php the_field('data-outroinfo'); ?>-embed"><?php the_title(); ?></span>

          <p class="remix-outro"> 
            <?php the_field('remix'); ?> 
          </p>

        </div>


				<div class="artista-outro">

            <?php the_field('artista'); ?>
            
        </div>


        <div class="descricao-outro <?php the_field('data-outroinfo'); ?>">

            <?php the_content(); ?>     
            
            

        </div>
        

   </div>

   
