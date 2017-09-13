<?php 

/**
 * add scripts plugin specific
 */
function yts_add_scripts() {
  // add main css
  wp_enqueue_style('yts-main-style', plugins_url( ) . '/yotubesubs/css/style.css'  );
  
  // add js file
  wp_enqueue_script( 'yts-main-js', plugins_url() . '/yotubesubs/js/main.js');

  //  add youtube script
  wp_register_script( 'google', 'https://apis.google.com/js/platform.js');
  wp_enqueue_script('google');
}

add_action( 'wp_enqueue_scripts', 'yts_add_scripts' );
