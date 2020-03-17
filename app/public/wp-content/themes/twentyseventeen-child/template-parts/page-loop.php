<ul class='movies-list'>
<?php
$args = [
    'post_type' => 'movie',
    'post_per_page' => -1
    
];
$movie = new WP_Query($args);
global $wpdb;

$query_result = $wpdb->get_results("SELECT CAST(AVG (pm.vote) AS DECIMAL (12,2)) AS overall_rating, pm.post_id AS post_id
FROM wp_yasr_log AS pm, wp_posts AS p
WHERE  pm.post_id = p.ID
GROUP BY pm.post_id
ORDER BY overall_rating DESC;");

while($movie ->have_posts() ): $movie ->the_post();  
    $done = false;
	if ($query_result) {
        foreach ($query_result as $result) {
            if(get_the_ID() == $result->post_id ){
                $done = true; ?>
                <li class='movie-class card gradient'>
	                <?php the_post_thumbnail('mediumSize');?>
                        <div class='card-content'>
	                        <a href='<?php the_permalink();?>'>
	                            <h3><?php the_title()?></h3>
                            </a>
                            <?php  $movie_data       =   get_post_meta( $post->ID, 'movie_data', true ); ?>
    
                            <p>Released: <?php  echo $movie_data['movie_released']; ?></p>
                            <p>Actors: <?php  echo $movie_data['movie_actors']; ?></p>
                            <p ><i class="fas fa-star"></i> <?php echo $result->overall_rating ?></h4>
                        </div>
                </li>
    <?php 
            }
        }
    }
    
    if (!$done) {?>
        <li class='movie-class card gradient'>
        <?php the_post_thumbnail('mediumSize');?>
            <div class='card-content'>
                <a href='<?php the_permalink();?>'>
                    <h3><?php the_title()?></h3>
                </a>
                <?php 

                $movie_data        =   get_post_meta( $post->ID, 'movie_data', true );
                ?>

                <p>Released: <?php  echo $movie_data['movie_released']; ?></p>
                <p>Actors: <?php  echo $movie_data['movie_actors']; ?></p>
            </div>
        </li>
        <?php
    }
endwhile;
wp_reset_postdata();
?>

</ul>