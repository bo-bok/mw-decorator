<?php

// this function loads the style (css) files
function mw_theme_styles(){
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . 'css/normalize.css' );
}
add_action( 'wp_equeue_scripts', 'mw_theme_styles' );
