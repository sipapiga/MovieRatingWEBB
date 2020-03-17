<?php
function movie_enqueue_styles() {
    
    $parent_style = 'parent-style'; // Parentstyle in this case is 2017.
    
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style ),
    wp_get_theme()->get('Version')
);
    wp_enqueue_style('bootstrapstyle','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_script('icon', 'https://kit.fontawesome.com/3a12e18fd4.js', array('jquery'), '4.2.12', true);
    wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '3.3.4', true);
}
add_action( 'wp_enqueue_scripts', 'movie_enqueue_styles' );
function gymfitness_setup(){
    // Register new image size
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true );
    add_image_size('blog', 966, 644, true);
    add_image_size('carousel-thumb', 255, 160, true);
  
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme','gymfitness_setup');

  add_filter( 'widget_text', 'do_shortcode' );

  
