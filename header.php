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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="myNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Index</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Archive</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--END NAVIGATION-->
        </header>
        <!--END HEADER-->


