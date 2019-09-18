<article class="archCont">
    
    <?php if ( have_posts() ) : the_post(); ?>

        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbnail', [ 'alt' => esc_html ( get_the_title() ) ] );?>
        </a>
        <div class="archInfo">
            <a href="<?php the_permalink(); ?>"><h2 class="archHead fw7"><?php the_title(); ?></h2></a>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="leerMas"></a>
        </div>


    <?php else : ?>
    <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
    <?php endif; ?>

</article>

