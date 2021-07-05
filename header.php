<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gabriel_Guerra_Theme
 */
 
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site color-changer">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gabrielguerratheme' ); ?></a>

	<header id="masthead" class="site-header">
			

	<div class="menu">
    <div class="menu-container">


  <?php 
 
  $args = array(
    'post_type' => 'menu',
    'posts_per_page' => 10,
    'order' => 'ASC'
  );

$loop = new WP_Query( $args ); 
  
if ( $loop->have_posts() ) : 
    while ( $loop->have_posts() ) : $loop->the_post(); 
    get_template_part( 'template-parts/menu-content' );
    endwhile; 
endif; 
?>

  </div>
</div>


	</header><!-- #masthead -->
