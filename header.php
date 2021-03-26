<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <!--START HEAD-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.typekit.net/ypk2rld.css">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>

        
    </head>
    <!--END HEAD-->
    <!--START BODY -->
    <body <?php body_class(); ?>>
        <!--START HEADER-->
        <header>
            <!--START NAVIGATION-->
            <nav class="navbar navbar-expand-md navbar-light bg-secondary py-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbar-content">
                          <?php $defaults=array(
                          'theme_location'    => 'main-nav',
                          'container_id'      => 'navbar-content',
                          'container'         => '',
                          'container_id'      => '',
                          'container_class'   => '',
                          'menu_id'           => false,
                          'menu_class'        => 'navbar-nav',
                          'depth'             => 0,
                          'add_li_class'      => "nav-item mx-4"
                      );
                      wp_nav_menu($defaults);?>
                    </ul>
                </div>
            </nav>
            <!--END NAVIGATION-->
        </header>
        <!--END HEADER-->


