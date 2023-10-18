<?php
function apical_enqueue_styles() {
  wp_enqueue_style( 'apical-style', get_stylesheet_uri() );
  wp_enqueue_script( 'apical-script', get_template_directory_uri() . '/assets/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'apical_enqueue_styles' );
