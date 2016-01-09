<?php 

/*********************
SCRIPTS & ENQUEUEING
*********************/

function bones_scripts_and_styles() {

  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  if (!is_admin()) {

    // modernizr and main stylesheets
    wp_register_script( 'bones-modernizr', get_stylesheet_directory_uri() . '/assets/js/libs/modernizr.custom.min.js', array(), '2.5.3', false );
    wp_register_style( 'bones-stylesheet', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), '', 'all' );
    wp_register_style( 'bones-owlcarousel-css', get_stylesheet_directory_uri() . '/assets/vendor/owl.carousel/dist/assets/owl.carousel.min.css', array(), '', 'all' );
    wp_register_style( 'bones-owlcarousel-theme', get_stylesheet_directory_uri() . '/assets/vendor/owl.carousel/dist/assets/owl.theme.default.min.css', array(), '', 'all' );
    wp_register_style( 'bones-ie-only', get_stylesheet_directory_uri() . '/assets/css/ie.min.css', array(), '' );

    // comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

    //adding scripts file in the footer
    wp_register_script( 'bones-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
    wp_register_script( 'bones-quickshare', get_stylesheet_directory_uri() . '/assets/vendor/quickshare/dist/quickshare.min.js', array( 'jquery' ), '', true );
    wp_register_script( 'bones-owlcarousel-js', get_stylesheet_directory_uri() . '/assets/vendor/owl.carousel/dist/owl.carousel.min.js', array( 'jquery' ), '', true );

    wp_enqueue_script( 'bones-modernizr' );
    wp_enqueue_style( 'bones-stylesheet' );
    wp_enqueue_style( 'bones-owlcarousel-css' );
    wp_enqueue_style( 'bones-owlcarousel-theme' );
    wp_enqueue_style( 'bones-ie-only' );

    $wp_styles->add_data( 'bones-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bones-js' );
    wp_enqueue_script( 'bones-quickshare' );
    wp_enqueue_script( 'bones-owlcarousel-js' );

  }
}

?>