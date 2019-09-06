<?php

    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css' );
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    }

    function my_theme_enqueue_scripts() {
        wp_enqueue_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', true);
        wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', true);
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );

    add_filter('acf/format_value/type=text', 'do_shortcode');

    function nav_menu() {
        register_nav_menu('nav-menu',__( 'Navigation Menu' ));
    }
      add_action( 'init', 'nav_menu' );
    
?>
