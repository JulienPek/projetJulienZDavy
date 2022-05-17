<?php
function montheme_setup()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'montheme_setup');

function montheme_enqueue_styles()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri());
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'montheme_enqueue_styles');
