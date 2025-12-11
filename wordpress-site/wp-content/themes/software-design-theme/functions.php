<?php

if (!function_exists('software_design_setup')) {
    function software_design_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'software-design'),
            'footer' => __('Footer Menu', 'software-design'),
        ));
    }
}
add_action('after_setup_theme', 'software_design_setup');

function software_design_scripts() {
    wp_enqueue_style('software-design-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Clean effects CSS
    wp_enqueue_style('clean-effects', get_template_directory_uri() . '/assets/css/clean-effects.css', array(), '1.0.0');
    
    if (file_exists(get_template_directory() . '/assets/css/additional.css')) {
        wp_enqueue_style('software-design-additional', get_template_directory_uri() . '/assets/css/additional.css', array(), '1.0.0');
    }
    
    // Simple animations JS
    wp_enqueue_script('simple-animations', get_template_directory_uri() . '/assets/js/simple-animations.js', array(), '1.0.0', true);
    
    if (file_exists(get_template_directory() . '/assets/js/main.js')) {
        wp_enqueue_script('software-design-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'software_design_scripts');

function software_design_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'software-design'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here.', 'software-design'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'software-design'),
        'id' => 'footer-widgets',
        'description' => __('Footer widget area', 'software-design'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'software_design_widgets_init');

function software_design_custom_post_types() {
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => __('Portfolio'),
                'singular_name' => __('Portfolio Item')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon' => 'dashicons-portfolio',
        )
    );
    
    register_post_type('services',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-admin-tools',
        )
    );
}
add_action('init', 'software_design_custom_post_types');

function software_design_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'software_design_excerpt_length', 999);

function software_design_excerpt_more($more) {
    return '... <a class="read-more" href="' . get_permalink() . '">' . __('Read More', 'software-design') . '</a>';
}
add_filter('excerpt_more', 'software_design_excerpt_more');