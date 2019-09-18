<?php get_header(); ?>


<main id="content" class="ptpb fixedWidth">

<?php if ( have_posts() ) : ?>
    
    <header class="page-header">
        <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
    </header><!-- .page-header -->
    
            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post();
    

                get_template_part( 'content', 'archive' );



            endwhile;
    
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
