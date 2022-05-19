<?php
function montheme_setup()
{
<<<<<<< HEAD
    register_nav_menu('main', 'menu_principal');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
=======
   add_theme_support('post-thumbnails');
   add_theme_support('custom-logo');
   register_nav_menu('main' ,'menu principal');
>>>>>>> d135cca409c803785db2ef09244c7f9e34709cb5
}

function montheme_enqueue_styles()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icon','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri());
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
    
}
// fonction pour créer un nouveau type de contenu avec taxonmie
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
            'supports' => array('title', 'editor', 'thumbnail'),
            'show_in_rest' => true,
            'menu_position' => 3,
            'menu_icon' => 'dashicons-buddicons-activity',
            'has_archive' => true,
            'taxonomies' => array('Gamecats'),
            'show_in_nav_menus' => true
        )
    );
}

// Fonction pour créer une taxonomy personalisé (category et tags(etiquettes))
function montheme_taxonomy()
{
    register_taxonomy('Gamecat', 'boardgame', [
        'labels' => [
            'name' => 'Gamecats',
            'singular_name' => 'Gamecat',
        ],
        'public' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true
    ]);
}

// fonction pour ajouter une classe css a un menu et plus particulièrement à un <li>
function montheme_menu_class_css($classes)
{
    $classes[] = "nav-item me-4";
    return $classes;
}

// Fonction pour ajouter une classe css à un <a>
function montheme_menu_link_css($atts)
{
    $atts['class'] = 'nav-link';
    return $atts;
}

add_action('after_setup_theme', 'montheme_setup');
add_action('init', 'mon_theme_custom_post_type');
add_action('init', 'montheme_taxonomy');
add_action('wp_enqueue_scripts', 'montheme_enqueue_styles');
add_filter('nav_menu_css_class', 'montheme_menu_class_css');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_css');
