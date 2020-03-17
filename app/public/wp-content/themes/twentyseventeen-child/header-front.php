<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
        
        <?php get_template_part( 'template-parts/header/header', 'image' ); ?>
        
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
                <div class="container">
                    <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
            <?php endif; ?>
	</header><!-- #masthead -->
    <div class="decoration-bar"></div>	
    <div class="site-header-front">
        <div class="container">
            <h4>Newest Movies</h4>
            <div class="row sidebar-class">
  
        <?php
            $args = [
                'post_type'	    => 'movie',
                'posts_per_page' => 5,
            ];
            $query = new WP_Query( $args );
            $firstIteration = 0;
            if( $query->have_posts() ):
                while( $query->have_posts() ) :
                   $query->the_post();
                  ?>    
							<div class="latest-info">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="carousel-thumb">
									<a href="<?php the_permalink(); ?>">
                                       
                                    <?php the_post_thumbnail('carousel-thumb'); ?>
									</a>
								</div>
                            <?php endif; ?>
                            </div>
                            
                <?php  endwhile;?>
            </div> 
        </div>  
             <?php  
            wp_reset_query();
            endif;?>
    </div>
    <div class="decoration-bar"></div>	
