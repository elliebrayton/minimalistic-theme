<?php 

/*****************************************
 
    STYLESHEET & SCRIPTS

*****************************************/

function custom_theme_scripts(){

    //JQUERY
    wp_enqueue_script('bower-jquery', get_stylesheet_directory_uri() . '/jquery/dist/jquery.min.js');

    //BOOTSTRAP JS FILE
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js');

    //MAIN JS FILE
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/scripts.js');

        //MAIN STYLESHEET
        wp_enqueue_style('main-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*****************************************
 
    ADDS FEATURED IMAGE

*****************************************/

add_theme_support('post-thumbnails');

/*****************************************
 
    CUSTOM IMAGE SIZE

*****************************************/


add_image_size( 'featured-image', 600, 600, false );

/*****************************************
 
    CUSTOM EXCERPT LENGTH

*****************************************/

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }

    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

    return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);

  if (count($content) >= $limit) {
      array_pop($content);
      $content = implode(" ", $content) . '...';
  } else {
      $content = implode(" ", $content);
  }

  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);

  return $content;
}
