<?php get_header(); ?>

<main id="content" class="ptpb fixedWidth">
    <article class="contenedor texto">
        <?php if ( have_posts() ) : the_post(); ?>

            <h1 class="text-uppercase fw7"><?php the_title(); ?></h1>

            <?php the_content(); ?>

        <?php else : ?>
        <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
        <?php endif; ?>

    </article>
</main>

<?php get_footer(); ?>