<?php
//STYLES
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/mota.css', array(), filemtime(get_stylesheet_directory() . '/css/mota.css'));
    wp_enqueue_script('theme-script', get_stylesheet_directory_uri() . '/js/scripts.js');
}

//MENU
function register_my_menu() {
    
    register_nav_menu('main-menu',__( 'Menu Principal' ));
    register_nav_menu('footer-menu',__( 'Menu Footer' ));

  }
  add_action( 'init', 'register_my_menu' );
  
//LOGO
  add_theme_support('custom-logo');  