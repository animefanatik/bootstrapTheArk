    <div id="footer">

    <!--
        <div id="footerTop" class="fixedWidth d-flex justify-content-between align-items-top row">
            <div class="col-6">
                <h1>The Ark Green Foundation</h1>
                <p>Hace 30 años nació el jardín familiar de Tommy Thomas y Patricia Riley, quienes amaban recolectar plantas y aprender sobre ellas. Con el tiempo, su colección en el jardín creció hasta tener cientos de especies y ser un lugar de atractivo turístico y referente académico para instituciones de educación pública y privada.</p>
                <p>Hoy Tommy Thomas ha creado un espacio para fomentar la educación ecológica y la conservación, convirtiendo 8 hectáreas de la finca en una Fundación de Jardín Botánico para donar a su país adoptivo, Costa Rica.</p>
            </div>
            <div class="col">
                <h2>Terrazas Temáticas</h2>
                <ul>
                    <li><a href="#">Medicinal Terrace</a></li>
                    <li><a href="#">Culinary Terrace</a></li>
                    <li><a href="#">Tropical Food</a></li>
                    <li><a href="#">Essential Oils</a></li>
                    <li><a href="#">Natural Dyes</a></li>
                </ul>
            </div>
            <div class="col">
                <h2>Jardines</h2>
                <ul>
                    <li><a href="#">Fruit Garden</a></li>
                    <li><a href="#">Sacred Garden</a></li>
                    <li><a href="#">Chinese Garden</a></li>
                    <li><a href="#">Ayurveda Garden</a></li>
                    <li><a href="#">Tropical Flowers</a></li>
                    <li><a href="#">Botanical Garden</a></li>
                </ul>
            </div>
        </div>
        <hr>
    -->

        <div class="bottomAddress">
            <div>
                <a href="https://goo.gl/maps/Cs5z8kNoDQDyF2Ho6" class="tBitem barIcon" target="_blank" rel=”noopener noreferrer”><img src="<?php echo get_template_directory_uri(); ?>/images/map-icon.png" alt="costa rica garden tour location"></a>
                <!-- <a href="" class="tBitem barIcon"><img src="<?php // echo get_template_directory_uri(); ?>/images/instagram-icon.png" alt="costa rica tour photos"></a> -->
                <a href="https://www.facebook.com/thearkherbfarm/" class="tBitem barIcon" target="_blank" rel=”noopener noreferrer”><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" alt="costa rica tours booking"></a>
            </div>
            <div class="tBitem text-uppercase">San Pedro de Santa Bárbara de Heredia<br>(506) 2269-4849 / (506) 2269-9683</div>
        </div>

        <div id="copy" class="fw7">© Ark Herb Farm. All rights reserved.</div>
    </div>
    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<?php if ( is_front_page() && is_home() ) { ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php } ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-16071381-7"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-16071381-7');
    </script>
</body>
</html>