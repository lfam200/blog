<?php

add_theme_support('post-thumbnails');

add_image_size('my-size', 200, 180, true);
add_image_size('profile', 144, 192, true);
add_image_size('destacado_post', 720, 240, true);

function register_my_menus(){

  register_nav_menus(

    array(
      'menu-header' => __('Menu Principal'),
      'menu-header-sm' => __('Menu Principal SM'),
      'menu-footer1' => __('Menu Footer1'),
      'menu-footer2' => __('Menu Footer2'),
      'menu-footer3' => __('Menu Footer3'),
      'menu-lite' => __('Menu Lite'),
      
    ) 
  );
}

add_action('init','register_my_menus');

function miplugin_register_sidebar(){

    register_sidebar(
        array(
            'id'    => 'sidebar-stripe',
            'name'  => 'Sidebar Stripe',
            'description' => 'Sidebar Stripe',
            'before_widget' => '<div class="">',
            'after_widget'  => '</div>'
            )
    );

  
}

add_action('widgets_init','miplugin_register_sidebar');


add_filter( "the_excerpt", "add_class_to_excerpt" );
function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="text-justify"', $excerpt);
}

function custom_excerpt_length( $length ) {
  return 45;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');