    <div id="footer" class="ptpb">
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
                    <li><a href="#">Terraza Medicinal</a></li>
                    <li><a href="#">Terraza Culinaria</a></li>
                    <li><a href="#">Milpa Alimentos Tropicales</a></li>
                    <li><a href="#">Aceites Esenciales</a></li>
                    <li><a href="#">Colorantes Naturales</a></li>
                </ul>
            </div>
            <div class="col">
                <h2>Jardines</h2>
                <ul>
                    <li><a href="#">Jardín Frutal</a></li>
                    <li><a href="#">Jardín Sagrado</a></li>
                    <li><a href="#">Jardín Chino</a></li>
                    <li><a href="#">Jardín Ayurveda</a></li>
                    <li><a href="#">Flores Tropicales</a></li>
                    <li><a href="#">Jardín Botánico</a></li>
                </ul>
            </div>
        </div>
    -->
        <hr>
        <div id="footerMenu" class="fixedWidth d-flex justify-content-around fw7">
            <a class="nav-link" href="/">inicio</a>
            <a class="nav-link" href="/experiencias">experiencias</a>
            <a class="nav-link" href="/actividades">actividades</a>
            <a class="nav-link" href="/contacto">contacto</a>
            <a class="nav-link" href="/quienes-somos">quienes somos</a>
        </div>
        <div id="copy" class="fw7">© Ark Herb Farm. All rights reserved.</div>
    </div>
    <?php wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php if ( is_front_page() && is_home() ) { ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php } ?>
    
</body>
</html>