<div class="sobre-overlay overlay">

    
    <div class="container">
      
    
     <div class="overlay-titulo menuol">
        <span class="bb">SOBRE</span>
      </div>
     

        <div class="sobre-bio"> 

        <?php 
 
        $args = array(
        'post_type' => 'sobre',
        'posts_per_page' => 1,
        'order' => 'ASC'
        );

        $loop = new WP_Query( $args ); 
        
        if ( $loop->have_posts() ) : 
        while ( $loop->have_posts() ) : $loop->the_post(); 
        the_content();
        endwhile; 
        endif; 
        ?>

           
        
        
        </div>


    </div>
</div>