<?php get_header(); ?>

<main id="content" class="ptpb fixedWidth">
    <article class="contenedor">
        <?php if ( have_posts() ) : the_post(); ?>

            <h1 class="text-uppercase fw7"><?php the_title(); ?></h1>

            <?php the_content(); ?>
            <address>Por <?php the_author_posts_link() ?></address>
        <?php else : ?>
        <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
        <?php endif; ?>

    </article>
    <aside>
        <?php // get_sidebar(); ?>
    </aside>
</main>

<?php get_footer(); ?>