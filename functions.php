<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'align-wide' );
add_theme_support( 'wp-block-styles' );

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'reveal', get_template_directory_uri() . '/reveal.js/css/reveal.css' );
    wp_enqueue_style( 'reveal-theme-black', get_template_directory_uri() . '/reveal.js/css/theme/black.css' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/reveal.js/js/reveal.js' );
});

add_action( 'customize_register', function($wp_customize) {
    $wp_customize->add_setting( 'autoslide_time' , array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '5',
        'transport' => 'refresh',
        'sanitize_callback' => '',
    ));

    $wp_customize->add_setting( 'automatic_reload' , array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'true',
        'transport' => 'refresh',
        'sanitize_callback' => '',
    ));

    $wp_customize->add_section( 'slideshow' , array(
        'title' => 'Slideshow',
        'priority' => 105,
        'input_attrs' => array(
            'min' => 0
        ),
    ));

    $wp_customize->add_control( 'autoslide_time', array(
        'type' => 'number',
        'section' => 'slideshow',
        'label' => 'Automatischer Wechsel nach (s)',
        
    ));

    $wp_customize->add_control( 'automatic_reload', array(
        'type' => 'checkbox',
        'section' => 'slideshow',
        'label' => 'Nach letzter Folie die Seite neu laden',
        
    ));
});
