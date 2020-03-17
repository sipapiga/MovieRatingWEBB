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
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('front'); ?>
<div class="container">
	<div class="row">
		<div class="col-9">
<?php if ( is_home() && ! is_front_page() ) : ?>
	<header class="page-header">
		<h1> class="page-title"><?php single_post_title(); ?></h1>
	</header>
	<?php else : ?>
		<header class="page-header">
			<h2 class="page-title"><?php _e( 'Movies', 'twentyseventeen' ); ?></h2>
		</header>
		<?php endif; ?>

			<div id=""  class="content-area">
				<main id="main" class="site-main" role="main">
					<?php  
				get_template_part('template-parts/page','loop');
			
				the_posts_pagination(
					array(
						'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
						'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
					)
				);
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
			</div><!-- .col-8 -->
			<div class="col-3">
				<?php get_sidebar(); ?>
			</div><!-- .col-4 -->
		</div><!-- .row -->
	</div><!-- .container -->

<?php
get_footer();