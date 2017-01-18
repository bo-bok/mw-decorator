<?php

add_theme_support( 'menus' );
add_theme_support( 'title-tag' );


// this function makes WP recognise our menu(s)
function register_theme_menus(){
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
    )
  );
}
add_action( 'init', 'register_theme_menus');



// this function loads the style (css) files
function mw_theme_styles(){
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style('responsive_grid_js', get_template_directory_uri() . '/css/responsive-grid.css');
}
add_action( 'wp_enqueue_scripts', 'mw_theme_styles' );


// this function loads the scripts (js)
function mw_theme_js(){
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', '', '', true);
  wp_enqueue_script( 'testimonial_slideshow_js', get_template_directory_uri() . '/js/testimonial-slide.js', array('main_js'), '', true);

  // note last three args:
  // wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true) ;
}
add_action( 'wp_enqueue_scripts', 'mw_theme_js' );
