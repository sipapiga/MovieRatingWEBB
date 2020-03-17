<?php 
/*
 * Plugin Name: Movie Post Types
 * Description: Post type for movie rating
 * Version:     1.0
 * Author:      Pat Prasopsap
 * Text Domain: Movie
 */

if (!function_exists('add_action')) {
    echo "Hi there! Im just a plugin not much I can do when called directly.";
    exit;
}

include 'includes/init.php';

add_action('init', 'movie_init');
add_action('add_meta_boxes', 'wporg_add_custom_box');
add_action('save_post', 'wporg_save_postdata',10,3);