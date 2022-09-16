<?php 

function portfolio_supports()
{
    #Ajout du menu dans le theme
    add_theme_support('menus');
    register_nav_menu('header', 'Menu header');
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'portfolio_supports');

function register_my_menu(){
    register_nav_menus( array(
        'header' => __( 'Menu header'),
    ) );
}
add_action( 'init', 'register_my_menu', 0 );


#Liste des styles à charger dans le header.php
function insert_css_in_head()
{
    #Chargement style perso
    wp_register_style('style', get_stylesheet_directory_uri() . '/style.css', '', false, 'screen');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'insert_css_in_head');


#Liste des JS à charger dans le template
function insert_js_in_template()
{
    #Chargement js perso
    wp_enqueue_script('js', get_stylesheet_directory_uri() . '/script.js', '', false, 'screen', false, false);
    wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js','',false, false);

}
add_action('wp_footer', 'insert_js_in_template',10); 