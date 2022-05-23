<?php

function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('custom-logo', [
        'height' => '200px',
        'width' => '200px',
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    ]);
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');

    add_image_size('post-thumbnail', 350, 215, true);
    /* remove_image_size('medium');
    add_image_size('medium', 500, 500); */
}

function montheme_register_assests()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri());
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
}

function montheme_title_separator()
{
    return '|';
}

function montheme_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function montheme_document_title_parts($title)
{
    unset($title['tagline']);
    return $title;
}

function montheme_pagination()
{
    $pages = paginate_links(['type' => 'array']);
    if ($pages == null) {
        return;
    }
    echo '<nav aria-label="Pagination class="my-4">';
    echo '<ul class="pagination">';
    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $class = 'page-item';
        if ($active) {
            $class .= ' active';
        }
        echo '<li class="' . $class . '">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

function montheme_init()
{
    register_taxonomy('gamecats', 'boardgame', [
        'labels' => [
            'name' => 'Gamecats',
            'singular_name' => 'Gamecat',
            'plural_name' => 'Gamecats',
            'search_items' => 'Rechercher des gamecats',
            'all_items' => 'Tous les gamecats',
            'edit_item' => 'Modifier le gamecat',
            'update_item' => 'Mettre à jour le gamecat',
            'add_new_item' => 'Ajouter un gamecat',
            'new_item_name' => 'Nouveau gamecat',
            'menu_name' => 'Gamecats',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'public' => true,
        'has_archive' => true,
    ]);
    register_post_type('boardgame', [
        'label' => 'bordgame',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-buddicons-activity',
        'suuports' => ['title', 'editor', 'thumbnails'],
        'show_in_rest' => true,
        'has_archive' => true,
    ]);
}

add_action('init', 'montheme_init');
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assests');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('document_title_parts', 'montheme_document_title_parts');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
require_once('metaboxes/sponso.php');
SponsoMetaBox::register();
