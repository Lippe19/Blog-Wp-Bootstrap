<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- Required meta tags -->
        <meta <?php bloginfo('charset'); ?>>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
        
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilo.css">
        
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/rodape/rodape.css">
        
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        
        <style>
            /*DESCOMENTE PARA PODER ALTERAR A COR DO TEXTO DO MENU
            -Remova a classe: "navbar-dark" da linha 35 deste arquivo (nav)
            -Descomentar no arquivo: customizer.php (ctr + f = Cor da letra do menu)
            
            .navbar-nav .nav-link{
                color: <?php // echo get_theme_mod('menu_color_link_section'); ?> !important;
            }*/
        </style>

        <?php wp_head(); ?>
    </head>
 <!--navbar-dark-->
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark <?php if (get_theme_mod('position_menu') == 'No') { echo 'fixed-top';} ?>" role="navigation" style="background-color: <?php echo get_theme_mod('menu_color_section'); ?>;"><!--fixed-top mynav -->
            <div class="container">

                <a class="navbar-brand" href="front-page.php">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    
                    if (has_custom_logo()) {
                        echo '<img src="' . esc_url($logo[0]) . '" class="img-fluid" height="45">';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                        echo '<p class="lead">' . get_bloginfo('description') . '</p>';
                    }
                    ?>
                </a>

                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler icone-nav" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'principal',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'nav navbar-nav ml-lg-auto',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()
                ));
                ?>
            </div>
        </nav>
