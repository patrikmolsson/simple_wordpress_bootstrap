<?php

/** 
 * 1. Styles, scripts, and fonts
 * 2. Title
 * 3. Custom logo
 */

// 1. Styles, scripts and fonts
function molsson_enqueue_resources() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.css' );

  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
  wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js', array( 'jquery' ));
}

add_action( 'wp_enqueue_scripts', 'molsson_enqueue_resources', 10);

if (!function_exists( 'molsson_google_fonts' )) {
  function molsson_google_fonts() {
    wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
    wp_enqueue_style( 'OpenSans');
  }

  add_action('wp_print_styles', 'molsson_google_fonts');
}

// 2. Title

add_theme_support( 'title-tag' );

// 3. Custom logo
add_theme_support( 'custom-logo' );

