<?php
function movie_init()
{
    $labels = array(
        'name' => _x('Movie', 'post type general name', 'movie'),
        'singular_name' => _x('movie', 'post type singular name', 'movie'),
        'menu_name' => _x('Movies', 'admin menu', 'movie'),
        'name_admin_bar' => _x('Movie', 'add new on admin bar', 'movie'),
        'add_new' => _x('Add New', 'movie'),
        'add_new_item' => __('Add New Movie', 'movie'),
        'new_item' => __('New Movie', 'movie'),
        'edit_item' => __('Edit Movie', 'movie'),
        'view_item' => __('View Movie', 'movie'),
        'all_items' => __('All Movies', 'movie'),
        'search_items' => __('Search Movies', 'movie'),
        'parent_item_colon' => __('Parent Movies:', 'movie'),
        'not_found' => __('No Movies found.', 'movie'),
        'not_found_in_trash' => __('No Movies found in Trash.', 'movie'),
    );

    $args = array(
        'labels' => $labels,
        'description' => __('A custom post type for Movies.', 'movie'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'movie'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'supports' => array('title', 'editor', 'author', 'thumbnail','custom-fields'),
        'taxonomies' => ['category', 'post_tag'],
        'show_in_rest' => true,
    );

    register_post_type('movie', $args);
}

function wporg_add_custom_box()
{
   
        add_meta_box(
            'wporg_box_id',           // Unique ID
            'Movie data',  // Box title
            'wporg_custom_box_html',  // Content callback, must be of type callable
            'movie'                   // Post type
        );
}

function wporg_custom_box_html($post)
{
    $value = get_post_meta($post->ID,'movie_data', true);
    ?>
    <div class="form-group row">
        <label for="movie_imdb_id" class="col-sm-2 col-form-label">IMDb-ID</label>
        <div class="col">
            <input type="text" name="movie_imdb_id" id="movie_imdb_id" class="form-control" value="<?php echo $value['movie_imdb_id']?>">
    </div>
    <div class="form-group row">
        <label for="movie_released" class="col-sm-2 col-form-label">Released</label>
        <div class="col">
            <input type="text" name="movie_released" id="movie_released" class="form-control" value="<?php echo $value['movie_released']  ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="movie_actors" class="col-sm-2 col-form-label">Actors</label>
        <div class="col">
            <input type="text" name="movie_actors" id="movie_actors" class="form-control" value="<?php echo $value['movie_actors']?>">
        </div>
    </div>
    <?php
}
function wporg_save_postdata($post_id,$post,$update)
{
    $movie_data                     = get_post_meta($post_id,'movie_data',true);
    $movie_data                     = empty($movie_data ) ? [] : $movie_data;
    $movie_data['movie_imdb_id']    =  isset($movie_data['movie_imdb_id'])?sanitize_text_field($_POST['movie_imdb_id']):'None';
    $movie_data['movie_released']   =  isset($movie_data['movie_released'])?sanitize_text_field($_POST['movie_released']):0;
    $movie_data['movie_actors']     =  isset($movie_data['movie_actors'])?sanitize_text_field($_POST['movie_actors']):'None';
    
    update_post_meta($post_id,'movie_data',$movie_data);
   
}
