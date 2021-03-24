<?php 

/*****************************************
 
    STYLESHEET & SCRIPTS

*****************************************/

function custom_theme_scripts(){
    
    //MAIN STYLESHEET
    wp_enqueue_style('main-style', get_stylesheet_uri());

    //JQUERY
    wp_enqueue_script('bower-jquery', get_stylesheet_directory_uri() . '/jquery/dist/jquery.min.js');

    //BOOTSTRAP JS FILE
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js');

    //MAIN JS FILE
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/scripts.js');
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*****************************************
 
    ADDS FEATURED IMAGE

*****************************************/
