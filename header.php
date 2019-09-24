<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php if ( is_front_page() && is_home() ) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/theArk.css">
<?php } else { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/internal.css">
<?php } ?>
</head>
<body>
    <div id="header">
        <div class="topBar">
            <div class="fixedWidth d-flex flex-row-reverse align-items-center;">
                <div>
                    <a href="https://goo.gl/maps/Cs5z8kNoDQDyF2Ho6" class="tBitem barIcon" target="_blank"><i class="fas fa-map-marked-alt"></i></a>
                    <a href="" class="tBitem barIcon"><i class="fab fa-instagram"></i></a>
                    <a href="" class="tBitem barIcon"><i class="fab fa-facebook-square"></i></a>
                </div>
                <div class="tBitem text-uppercase">San Pedro de Santa Bárbara de Heredia<br>(506) 2269-4849 / (506) 2269-9683</div>
            </div>
        </div>
        <div class="mainBar fw7">
            <div class="fixedWidth">                
                <nav class="navbar navbar-expand-custom navbar-dark ">
                    <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="jardin botanico el arca"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav justify-content-around w-100">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/experiencias">experiencias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/actividades">actividades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cursos-libres">Cursos Libres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contacto">contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/quienes-somos">quienes somos</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>