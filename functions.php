<?php
function montheme_setup()
{
    register_nav_menu('main', 'menu_principal');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

function montheme_enqueue_styles()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri());
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], false, true);
}
// fonction pour créer un nouveau type de contenu avec taxonmie
function mon_theme_custom_post_type()
{
    register_post_type(
        'boardgame',
        array(
            'labels' => array(
                'name' => 'boardgames',
                'singular_name' => 'boardgame',
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'show_in_rest' => true,
            'menu_position' => 3,
            'menu_icon' => 'dashicons-buddicons-activity',
            'has_archive' => true,
            'taxonomies' => array('gamecats')
        )
    );
}

// Fonction pour créer une taxonomy personalisé (category et tags(etiquettes))
function montheme_taxonomy()
{
    register_taxonomy('gamecats', 'boardgame', [
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
    return $atts;
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */

function wpdocs_custom_excerpt_length($length)
{
    return 25;
}

function monTheme_dropdown_class($classes)
{
    $classes[] = "dropdown-menu  bg-dark";
    return $classes;
}

function monTheme_dropdown_menu_attr($atts, $items, $depth)
{
    $dropdown = [84];
    if (in_array($items->ID, $dropdown)) {
        $atts['class'] = "nav-link dropdown-toggle";
        $atts['id'] = "navbarDropdown";
        $atts['role'] = "button";
        $atts['data-bs-toggle'] = "dropdown";
        // Penser à ajouter aux éléments de sous menu dans l'admin la classe dropdown-item
    }
    return $atts;
}

function montheme_category_display($links){
    var_dump($links);
}    


function wpb_hook_javascript() {
    ?>
        <script>
          //var audio = new Audio("C:\xampp\htdocs\miniBlogProjet\images\AWPShooting-CS-GOSoundEffect.mp3");
            var audio = new Audio("C:/xampp/htdocs/miniBlogProjet/images/AWPShooting-CS-GOSoundEffect.mp3");

            AwpBtns = document.querySelectorAll(".AwpBtn");
            foreach(AwpBtns as AwpBtn){
            AwpBtn.onclick = function () {
                audio.play();
            }}

        </script>
    <?php
}



add_action('after_setup_theme', 'montheme_setup');
add_action('init', 'mon_theme_custom_post_type');
add_action('init', 'montheme_taxonomy');
add_action('wp_head', 'wpb_hook_javascript');
add_action('wp_enqueue_scripts', 'montheme_enqueue_styles');
add_filter('nav_menu_css_class', 'montheme_menu_class_css');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_css');
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
add_filter('nav_menu_submenu_css_class', 'monTheme_dropdown_class');
add_filter('nav_menu_link_attributes', 'monTheme_dropdown_menu_attr', 10, 3);
//add_filter('term_links-gamecats', 'montheme_category_display');
