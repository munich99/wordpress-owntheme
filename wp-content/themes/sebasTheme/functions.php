<?php

function meine_styles() {
    $handle = "sebas-theme-style";
    wp_enqueue_style( $handle, get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'meine_styles');


function add_my_widget() {

   //

}
add_action( 'setup_theme', 'add_my_widget' );




function add_my_menue() { 
    register_nav_menus(
        array(
            'main-nav'   => 'Main Navigation',
            'footer-nav' => 'Footer Navigation'
        )
    );
}
add_action( 'after_setup_theme', 'add_my_menue' );

// Maybe an add_action can help:

/*

function my_custom_menus() {
    $locations = array(
        'fomenu'   => __( 'Fomenu', 'smaragdkerteszet' ),
        'kismenu'  => __( 'Kismenu', 'smaragdkerteszet' ),
    );
    register_nav_menus( $locations );
 }

// Hook them into the theme-'init' action
add_action( 'init', 'my_custom_menus' );

*/