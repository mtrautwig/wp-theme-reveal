<?php

add_theme_support( 'post-thumbnails' );

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'reveal', get_template_directory_uri() . '/reveal.js/css/reveal.min.css' );
    wp_enqueue_style( 'reveal-theme-black', get_template_directory_uri() . '/reveal.js/css/theme/black.css' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/reveal.js/js/reveal.min.js' );
});
