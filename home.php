<?php get_header(); ?>
    <div id="main">
        <div id="hero" class="fixedWidth animated fadeIn">
            <h1 class="fw7">JARDÍN BOTÁNICO</h1>
            <hr>
            <h2 class="fw3">Un lugar mágico, rodeado de naturaleza, a pocos minutos de la ciudad.</h2>
            
        </div>
    </div>
        <div id="objetive">
            <p class="fixedWidth fw3">Creemos en la importancia de educar y compartir con la población el uso y los beneficios de las plantas para mejorar la vida y el bienestar del planeta.</p>
        </div>
        <div id="exp" class="ptpb">
            <h1 class="text-uppercase fw7">Experiencias únicas para activar todos tus sentidos</h1>
            <p>Cada experiencia es única. Se activarán todos los sentidos de los visitantes, permitiéndoles conectarse con la naturaleza y restaurar su armonía.</p>
            <div id="expAll" class="d-flex justify-content-around flex-wrap fixedWidth">

<?php 
$new_query = new WP_Query(array( 'category_name' => 'experiencias' ));
while($new_query -> have_posts()) : $new_query -> the_post();
?>
                <a href="<?php the_permalink(); ?>" class="expItem" >
                    <article class="d-flex flex-column">
                        <?php the_post_thumbnail('medium', [ 'alt' => esc_html ( get_the_title() ) ] );?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                    </article>
                </a>
<?php endwhile; ?>            
            </div>
            <a href="/reservar" id="expRes" class="btn btn-link fw7">RESERVAR EXPERIENCIA</a>
        </div>
        <div id="map" class="ptpb">
            <div class="fixedWidth d-flex align-items-center row">
                <article class="col">
                    <h2 class="fw7">¿Como llegar?</h2>
                    <p>Estamos ubicados a tan solo 30 minutos de la capital. Aquí le compartimos las diferentes rutas que puede tomar para visitarnos:</p>
                    <div>
                        <h3>Desde el centro de San José:</h3>
                        <p>Son 20Km hasta llegar a la finca en un viaje que puede tomar al rededor de 20 minutos tomando la ruta por la Autopista General Cañas o 45 minutos por Heredia. Ver en Google Maps: <a href="https://goo.gl/maps/prRJBZ3P4u3XzUyH7">https://goo.gl/maps/prRJBZ3P4u3XzUyH7</a></p>
                    </div>
                    <div>
                        <h3>Desde el Aeropuerto Juan Santamaría:</h3>
                        <p>Son 7.9Km hasta llegar a la finca. Puedes tomar un servicio de taxi el cual tomará al rededor de 20 a 30 minutos tomando la ruta por Calle Sabaneta. Ver en Google Maps: <a href="https://goo.gl/maps/w4gZJ361BaY5r6kKA">https://goo.gl/maps/w4gZJ361BaY5r6kKA</a></p>
                    </div>
                    <div>
                        <h3>Desde el centro de Alajuela:</h3>
                        <p>El trayecto es de 7Km, 20 minutos tomando  la ruta por Calle Rosales hacia la Calle Sabaneta. Ver en Google Maps: <a href="https://goo.gl/maps/K7FX8jTtpgSWsrnn8">https://goo.gl/maps/K7FX8jTtpgSWsrnn8</a></p>
                    </div>
                </article>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.70010711497!2d-84.1716206846391!3d10.041586992822634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f0bca5a498c7%3A0x83fc6d9c2de36ffc!2sThe+Ark+Herb+Farm!5e0!3m2!1sen!2scr!4v1559758055940!5m2!1sen!2scr" width="600" height="450" style="border:0" class="col" allowfullscreen></iframe>
            </div>
        </div>
<?php get_footer(); ?>