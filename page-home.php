<?php get_header(); ?>
    <div id="main">
        <div id="hero" class="fixedWidth animated fadeIn">
            <h1 class="fw7">BOTANICAL GARDEN</h1>
            <hr>
            <h2 class="fw3">Get out of the routine, surround yourself with the magic of nature. Come to know the largest botanical garden in Costa Rica.</h2>
            
        </div>
    </div>
        <div id="objetive">
            <p class="fixedWidth fw3">Our mission is to educate and share knowledge about the use of plants for a better personal life and for the well-being of the planet.</p>
        </div>
        <div id="exp" class="ptpb">


            <h1 class="text-uppercase fw7">experiences.</h1>
            <p id="textExperience">In The Ark, we have more than 25 years preserving a wide variety of plants from different parts of the world, all to the delight of our visitors. When you come you can enjoy more than 1600 species. We have prepared different unique experiences, where you can learn interactively about the exuberant world of plants. Whichever activity you choose, you will activate your senses achieving an incredible connection with nature.</p>


            <div id="expAll" class="d-flex justify-content-around flex-wrap fixedWidth">

<?php 
$new_query = new WP_Query(array( 'category_name' => 'experiences' ));
while($new_query -> have_posts()) : $new_query -> the_post();
?>
                <a href="<?php the_permalink(); ?>" class="expItem" aria-label="<?php the_title(); ?>" >
                    <article class="d-flex flex-column">
                        <?php the_post_thumbnail('medium', [ 'alt' => esc_html ( get_the_title() ) ] );?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                    </article>
                </a>
<?php endwhile; ?>            
            </div>
            <p class="mktext fixedWidth">You can visit The Ark and hire a guided tour with our expert botanical guides, or you can simply come and visit the botanical garden and explore the multiple trails, plant collections by type or by use and enjoy the incredible themed terraces.</p>
            <a href="/reserve" id="expRes" class="btn btn-link fw7">RESERVE YOUR EXPERIENCE</a>
        </div>
        <div id="map" class="ptpb">
            <div class="fixedWidth d-flex align-items-center row">
                <article class="col">
                    <h2 class="fw7">How to get?</h2>
                    <p>We are located just 30 minutes from the capital. Here we share the different routes you can take to visit us:</p>
                    <div>
                        <h3>From downtown San José:</h3>
                        <p>It is 20 km to reach the farm on a trip that can take about 20 minutes through the General Cañas Highway or 45 minutes through Heredia. See on Google Maps: <a href="https://goo.gl/maps/prRJBZ3P4u3XzUyH7">https://goo.gl/maps/prRJBZ3P4u3XzUyH7</a></p>
                    </div>
                    <div>
                        <h3>From Juan Santamaría Airport:</h3>
                        <p>It is 7.9km until you reach the farm. You can take a taxi service which will take around 20 to 30 minutes taking the route through Calle Sabaneta. See on Google Maps: <a href="https://goo.gl/maps/w4gZJ361BaY5r6kKA">https://goo.gl/maps/w4gZJ361BaY5r6kKA</a></p>
                    </div>
                    <div>
                        <h3>From the center of Alajuela:</h3>
                        <p>The journey is 7km, 20 minutes taking the route through Rosales Street towards Sabaneta Street. See on Google Maps: <a href="https://goo.gl/maps/K7FX8jTtpgSWsrnn8">https://goo.gl/maps/K7FX8jTtpgSWsrnn8</a></p>
                    </div>
                </article>
                <iframe title="costa rica botanical garden" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.70010711497!2d-84.1716206846391!3d10.041586992822634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f0bca5a498c7%3A0x83fc6d9c2de36ffc!2sThe+Ark+Herb+Farm!5e0!3m2!1sen!2scr!4v1559758055940!5m2!1sen!2scr" width="600" height="450" style="border:0" class="col" allowfullscreen></iframe>
            </div>
        </div>
<?php get_footer(); ?>