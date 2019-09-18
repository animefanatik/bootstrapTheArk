<?php get_header(); ?>


<main id="content" class="ptpb fixedWidth">

<?php if ( have_posts() ) : ?>
    
    <header class="page-header">
        <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
    </header><!-- .page-header -->
    
    <?php while ( have_posts() ) : the_post(); ?>

    <article class="archCont">

        <?php if ( have_posts() ) : the_post(); ?>
            <?php the_post_thumbnail('thumbnail', [ 'alt' => esc_html ( get_the_title() ) ] );?>
            <div class="archInfo">
                <h2 class="archHead fw7"><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
            </div>
    
    
        <?php else : ?>
        <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
        <?php endif; ?>
    
    </article>
<?php endwhile; ?>

            <?php
    
            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                'next_text'          => __( 'Next page', 'twentyfifteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
            ) );
    
        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );
    
        endif;
        ?>
   
</main>



<?php get_footer(); ?>
