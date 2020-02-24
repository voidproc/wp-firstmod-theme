<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

// シンタックスハイライト用にPrism.jsを使用する
function load_prism() {
    wp_enqueue_style( 'prism-style', get_theme_file_uri( '/prism/prism.css' ) );
    wp_enqueue_script( 'prism-script', get_theme_file_uri( '/prism/prism.js' ), [], false, true );
}
add_action( 'wp_enqueue_scripts', 'load_prism' );

?>
