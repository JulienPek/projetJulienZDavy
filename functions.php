<<<<<<< HEAD
<?php
// envoie sur dossier distant de julien
<<<<<<< HEAD
function montheme_setup()
{
=======

function projetJulienZDavy_Setup(){
>>>>>>> parent of e583da5 (commit du Mercredi)
=======
<<<<<<< .merge_file_a13264
<?php

// Essai de connexion a la branch davy du github de Julien 2eme essai

function montheme_setup()
{
=======
<?php 

// test si je suis connecté avec ton dossier a distance

function montheme_setup() {
>>>>>>> .merge_file_a14268
>>>>>>> 2abd9a78837032d7a6246f1013e75f19a6097eed
    add_theme_support('post-thumbnails');
}

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_a13264
>>>>>>> 2abd9a78837032d7a6246f1013e75f19a6097eed
function montheme_enqueue_styles()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
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
        )
    );
<<<<<<< HEAD
=======
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
        'show_admin_column' => true
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
=======
function mon_theme_scripts() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
>>>>>>> 2abd9a78837032d7a6246f1013e75f19a6097eed
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
        'show_admin_column' => true
    ]);
}

// fonction pour ajouter une classe css a un menu et plus particulièrement à un <li>
function montheme_menu_class_css($classes)
{
    $classes[] = "nav-item me-4";
    return $classes;
}

<<<<<<< HEAD
// Fonction pour ajouter une classe css à un <a>
function montheme_menu_link_css($atts)
{
    $atts['class'] = 'nav-link';
=======
function montheme_menu_link_atts($atts){
    $atts['class'] = "nav-link";
>>>>>>> .merge_file_a14268
>>>>>>> 2abd9a78837032d7a6246f1013e75f19a6097eed
    return $atts;
}

add_action('after_setup_theme', 'montheme_setup');
<<<<<<< HEAD
=======
<<<<<<< .merge_file_a13264
>>>>>>> 2abd9a78837032d7a6246f1013e75f19a6097eed
add_action('init', 'mon_theme_custom_post_type');
add_action('init', 'montheme_taxonomy');
add_action('wp_enqueue_scripts', 'montheme_enqueue_styles');
add_filter('nav_menu_css_class', 'montheme_menu_class_css');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_css');
=======
<<<<<<< HEAD
function mon_theme_scripts(){
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',[],false,true);
}

function mon_theme_custom_types(){
    register_post_type('boardgame',[
        'labels' => [
            'name' => 'boardgames',
            'singular_name' => 'boardgame'
        ],
            'public'      => true,
            'menu_position' => 3,
            'menu_icon'=>'dashicons-buddicons-activity',
            'supports' => ['title', 'editor', 'thumbnail'],
            'has_archive' => true,
            'show_in_rest' => true

    ]);
}

add_action('after_setup_theme', 'projetJulienZDavy_Setup');
add_action('init', 'mon_theme_custom_types');
add_action('wp_enqueue_scripts', 'projetJulienZDavy_Setup');



>>>>>>> parent of e583da5 (commit du Mercredi)
=======
add_action('init', 'mon_theme_custom_types');
add_action('init', 'montheme_custom_taxonomies');
add_action('wp_enqueue_scripts', 'mon_theme_scripts');
add_filter('nav_menu_css_class', 'montheme_menu_cls');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_atts');
>>>>>>> .merge_file_a14268
>>>>>>> 2abd9a78837032d7a6246f1013e75f19a6097eed
