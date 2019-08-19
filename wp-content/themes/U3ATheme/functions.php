<?php

the_content(); 

function load_css(){
  wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_css');


//Load JS
function load_js(){
  wp_register_script('script', get_template_directory_uri(). '/js/scripts.js', array(), 1, 1, 1);
  wp_enqueue_script('script');

  wp_register_script('dropdown', get_template_directory_uri(). '/js/dropdown.js', array(), 1, 1, 1);
  wp_enqueue_script('dropdown');


}

add_action('wp_enqueue_scripts', 'load_js');


//register menus
add_theme_support('menus');

register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'U3ATheme'),
  )
);
?>
