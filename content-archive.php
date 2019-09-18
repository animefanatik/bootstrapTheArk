<article class="archCont">
    
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbnail', [ 'alt' => esc_html ( get_the_title() ) ] );?>
        </a>
        <div class="archInfo">
            <a href="<?php the_permalink(); ?>"><h2 class="archHead fw7"><?php the_title(); ?></h2></a>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="leerMas"></a>
        </div>



</article>

