<?php
function current_theme_setup()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

//    register_nav_menus(
//        array(
//            'menu-1' => esc_html__( 'Primary', 'zel' ),
//            'menu-2' => esc_html__( 'Footer menu 1', 'zel' ),
//        )
//    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'current_theme_setup');

function theme_files()
{
    wp_register_script('app-page-js', get_theme_file_uri('/script/script.js'), NULL, filemtime(get_template_directory() . '/script/script.js'), true);
    wp_register_style('main-styles', get_template_directory_uri() . '/styles/all.css', NULL, filemtime(get_template_directory() . '/styles/all.css'), 'all');

    //enqueue scripts
    wp_enqueue_script('app-page-js');

    //enqueue styles
    wp_enqueue_style('main-styles');
}

add_action('wp_enqueue_scripts', 'theme_files');