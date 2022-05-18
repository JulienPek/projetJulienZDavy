<?php

function projetJulienZDavy_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menu('main', 'menu_principal');
}

function projet_theme_scripts()
{
    wp_enqueue_style('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], false, true);
}

function projet_custom_post_type()
{
    register_post_type(
        'boardgames',
        array(
            'labels'      => array(
                'name'          => 'boardgames',
                'singular_name' => 'boardgame',
            ),
            'public'      => true,
            'menu_position' => 3,
            'menu_icon' => 'dashicons-buddicons-activity',
            'supports' => ['thumbnail', 'editor', 'title'],
            'show_in_rest' => true,
            'has_archive' => true,
        )
    );
}

function projet_custom_taxonomies()
{
    register_taxonomy('genre', 'boardgames', [
        'labels' => [
            'name' => 'Genres',
            'singular_name' => 'Genre'
        ],
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'show_admin_column' => true,
        'default_term' => 'Uncategorised',
        'hierarchical' => true
    ]);
}

function projet_menu_cls($classes)
{
    $classes[] = "nav-item";
    return $classes;
}

function projet_menu_link_add_attribute($atts)
{
    $atts['class'] = 'nav-link';
    return $atts;
}

add_action('after_setup_theme', 'projetJulienZDavy_setup');
add_action('init', 'projet_custom_post_type');
add_action('init', 'projet_custom_taxonomies');
add_action('wp_enqueue_scripts', 'projet_theme_scripts');
add_filter('nav_menu_css_class', 'projet_menu_cls');
add_filter('nav_menu_link_attributes', 'projet_menu_link_add_attribute');
