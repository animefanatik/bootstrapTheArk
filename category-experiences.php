<?php get_header(); ?>


<main id="content" class="ptpb fixedWidth">

    
    <header class="page-header">
        <?php 
            the_archive_title( '<h1 class="text-uppercase fw7">', '</h1>' );
            the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
    </header><!-- .page-header -->
    <div class="d-flex justify-content-around flex-wrap">
        <?php while ( have_posts() ) : the_post(); ?>
    
        <article class="expCont">
    
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', [ 'alt' => esc_html ( get_the_title() ) ] );?>
            </a>
            <div class="expInfo">
                <a href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?>"><h2 class="expHead fw7"><?php the_title(); ?></h2></a>
                <?php the_excerpt(); ?>
                <!--<a href="<?php // the_permalink(); ?>" class="bookExp btn-link fw7">Reserve</a> -->
            </div>
        
                
        </article>
    <?php endwhile; ?>
    </div>
    
    <?php if ( have_posts() ) : ?>

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
