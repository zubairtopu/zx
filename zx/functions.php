<?php
function zx_setup(){
    // For text domain
    load_theme_textdomain( 'zx' );
    // For Title
    add_theme_support( 'title-tag' );

    // For Post Thumbnail
    add_theme_support('post-thumbnails');

    // For register nav menu
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'zx'),
        'footer-menu'=> __('Footer Menu', 'zx'),
    ));
}
add_action('after_setup_theme', 'zx_setup');


function zx_scripts(){
    // Font-awsome CSS
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(),'1.0.0', 'all');
    // Owl carosul
    wp_enqueue_style('owls', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(),'1.0.0', 'all');
    // Owl theme
    wp_enqueue_style('owltheme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(),'1.0.0', 'all');
    // style
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array(),'1.0.0', 'all');
    // media
    wp_enqueue_style('media', get_template_directory_uri().'/assets/css/responsive.css', array(),'1.0.0', 'all');

    // Theme default css 
    wp_enqueue_style('theme-style', get_stylesheet_uri( ));


    wp_enqueue_script('owlCarousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('mainn', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'zx_scripts');

// Register sidebar
function zx_widgets(){
    register_sidebar( array(
        'name' => __('Main Sidebar', 'zx'),
        'id'   => 'sidebar-1',
        'description' => __('ZX main sidebar', 'zx'),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __('Sidebar-2', 'zx'),
        'id'   => 'sidebar-2',
        'description' => __('ZX main sidebar', 'zx'),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'zx_widgets' );

