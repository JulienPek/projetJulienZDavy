<?php
function montheme_setup()
{
    add_theme_support('post-thumbnails');
}

function montheme_enqueue_styles()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri());
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
}

function mon_theme_custom_post_type()
{
    register_post_type(
        'boardgame',
        array(
            'labels' => array(
                'name' => __('boardgames'),
                'singular_name' => __('boardgame'),
            ),
            'public' => true,
            'show_in_rest' => true,
            'menu_position' => 3,
            'menu_icon' => 'dashicons-buddicons-activity',
            'has_archive' => true,
        )
    );
}

add_action('after_setup_theme', 'montheme_setup');
add_action('init', 'mon_theme_custom_post_type');
add_action('wp_enqueue_scripts', 'montheme_enqueue_styles');
