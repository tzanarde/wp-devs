<?php

require get_template_directory() . '/inc/customizer.php';

function wpdevs_load_scripts(){

    // Add stylesheet to queue
    wp_enqueue_style('wpdevs-style',
                     get_stylesheet_uri(),
                     array(),
                     filemtime(get_template_directory() . '/style.css'),
                     'all');

    // Add fonts to queue
    wp_enqueue_style('google-fonts',
                     'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;700&display=swap',
                     array(),
                     null);

    // Add script to queue
    wp_enqueue_script('dropdown',
                      get_template_directory_uri() . '/js/dropdown.js',
                      array(),
                      '1.0',
                      true);
}

// Call the function wpdevs_load_scripts
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');

function wpdevs_config(){

    // Loading text domain
    $textdomain  = 'wp-devs';
    load_theme_textdomain($textdomain, get_template_directory() . "/languages/");

    // Register the menus
    register_nav_menus(array('wp_devs_main_menu' => esc_htmlesc_html__('Main Menu', 'wp-devs'),
                            'wp_devs_footer_menu' => esc_htmlesc_html__('Footen Menu', 'wp-devs')));

    // Adding theme support for custom-header
    add_theme_support('custom-header',
                      array('height' => 225,
                            'width' => 1920));

    // Adding theme support for post-thumbnails
    add_theme_support('post-thumbnails');

    // Adding theme support for custom-logo
    add_theme_support('custom-logo',
                      array('height' => 110,
                            'width' => 200,
                            'flex-height' => true,
                            'flex-width' => true));

    // Adding theme support for automatic-feed-links (RSS readers)
    add_theme_support('automatic-feed-links');

    // Adding theme support for html5
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    // Adding theme support for title-tag
    add_theme_support('title-tag');

}

// Call the function wpdevs_config
add_action('after_setup_theme', 'wpdevs_config');

function wpdevs_sidebars(){

    // Registering theme support for sidebar
    register_sidebar(array('name' => esc_html__('Blog Sidebar', 'wp-devs'),
                           'id' => 'sidebar-blog',
                           'description' => esc_html__('This is the Blog Sidebar. You can add your widgets here.', 'wp-devs'),
                           'before_widget' => '<div class="widget-wrapper">',
                           'after_widget' => '</div>',
                           'before_title' => '<h4 class="widget-title"',
                           'after_title' => '</h4>'));

    // Registering theme support for service 1
    register_sidebar(array('name' => esc_html__('Service 1', 'wp-devs'),
                           'id' => 'services-1',
                           'description' => esc_html__('First Service Area', 'wp-devs'),
                           'before_widget' => '<div class="widget-wrapper">',
                           'after_widget' => '</div>',
                           'before_title' => '<h4 class="widget-title"',
                           'after_title' => '</h4>'));

    // Registering theme support for service 2
    register_sidebar(array('name' => esc_html__('Service 2', 'wp-devs'),
                           'id' => 'services-2',
                           'description' => esc_html__('Second Service Area', 'wp-devs'),
                           'before_widget' => '<div class="widget-wrapper">',
                           'after_widget' => '</div>',
                           'before_title' => '<h4 class="widget-title"',
                           'after_title' => '</h4>'));

    // Registering theme support for service 3
    register_sidebar(array('name' => esc_html__('Service 3'),
                           'id' => 'services-3',
                           'description' => esc_html__('Third Service Area', 'wp-devs'),
                           'before_widget' => '<div class="widget-wrapper">',
                           'after_widget' => '</div>',
                           'before_title' => '<h4 class="widget-title"',
                           'after_title' => '</h4>'));
}

// Call the function wpdevs_sidebars
add_action('widgets_init', 'wpdevs_sidebars');

// Create the function wp_body_open if it does not exist yet
if(!function_exists('wp_body_open')){
    function wp_body_open(){
        do_action('wp_body_open');
    }
}
