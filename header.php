<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/general.css">
<?php if ( is_front_page() && is_home() ) { ?>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/theArk.css">
    <meta name="description" content="Botanical Garden in the Mountains of Costa Rica">
<?php } else { ?>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/internal.css">
<?php } ?>
</head>
<body>
    <div id="header">
        <div class="topBar">
            <div class="fixedWidth d-flex flex-row-reverse align-items-center;">
                <div>
                    <a href="https://goo.gl/maps/Cs5z8kNoDQDyF2Ho6" class="tBitem barIcon" target="_blank" rel=”noopener noreferrer”><img src="<?php echo get_template_directory_uri(); ?>/images/map-icon.png" alt="costa rica garden tour location"></a>
                    <!-- <a href="" class="tBitem barIcon"><img src="<?php // echo get_template_directory_uri(); ?>/images/instagram-icon.png" alt="costa rica tour photos"></a> -->
                    <a href="https://www.facebook.com/thearkherbfarm/" class="tBitem barIcon" target="_blank" rel=”noopener noreferrer”><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" alt="costa rica tours booking"></a>
                </div>
                <div class="tBitem text-uppercase">San Pedro de Santa Bárbara de Heredia<br>(506) 2269-4849 / (506) 2269-9683</div>
            </div>
        </div>
        <div class="mainBar fw7">
            <div class="fixedWidth">                
                <nav class="navbar navbar-expand-custom navbar-dark ">
                    <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="botanical garden - the ark"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav justify-content-around w-100">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/experiences">Experiences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/activities">Activities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/workshops">Workshops</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about-us">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>