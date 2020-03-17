<?php
while(have_posts() ): the_post();  
        $movie_data        =   get_post_meta( $post->ID, 'movie_data', true ); ?>
    <div class="tag-entry">
        <p class="text-primary"><?php the_title(); ?></p>
        <p >(<?php  echo $movie_data['movie_released']; ?>)</p>
        
</div>
    <?php
    ?>
    <div class="single-info">
        <p>Actors: <?php  echo $movie_data['movie_actors']; ?></p>
    </div>
    <div class="entry-summary">
        <?php the_content(); ?>
        <?php the_tags(); ?>
    </div><!-- .entry-summary -->
    <?php 

    the_post_navigation(
					array(
						'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
					)
                );
    ?>
<?php endwhile; ?>