<?php

function meine_styles() {
    $handle = "sebas-theme-style";
    wp_enqueue_style( $handle, get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'meine_styles');


