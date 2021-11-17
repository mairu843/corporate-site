<?php

function twpp_enqueue_styles(){
    wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
    wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/style.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

// function contact_script() {
//     if ( is_page( 'contact' ) ) {
//     wp_enqueue_style( 'contact', get_template_directory_uri() . 'css/contact.css' );
//     }
//     else {
//     wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
//     }
// }
// add_action( 'wp_enqueue_scripts', 'contact_script' );


function twpp_enqueue_scripts(){
    wp_enqueue_script(
        'main-js-sheet',
        get_template_directory_uri() . '/js/main.js',
        array(),
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');

?>