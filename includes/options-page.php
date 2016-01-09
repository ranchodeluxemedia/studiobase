<?php 

if ( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title' => 'Slideshow Settings',
    'menu_title' => 'Slideshow',
    'menu_slug' => 'slideshow-settings',
    'capability' => 'edit_posts',
    'redirect' => false
  ));

}