<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
wp_enqueue_script( 'play-episode', get_stylesheet_directory_uri() . '/js/play-episode.js', array(), true );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
