<div class="trilha" data-trilhainfo=".<?php the_field('data-trilhainfo'); ?>">
				<div class="titulo-trilha">
          <?php the_title(); ?>
        </div>
				<div class="empresa-trilha">
					<?php the_field('empresa'); ?>
        </div>
        <div class="descricao-trilha <?php the_field('data-trilhainfo'); ?>">
           <?php the_content(); ?>
            <div class="embed-trilha"> 
              <?php the_field('embed');?> 
            </div>
				</div>
</div>

