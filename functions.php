<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Configuration du thème
	// require_once get_template_directory() . '/inc/config.php';
  //
	// // Types de publication et taxonomies
	// require_once get_template_directory() . '/inc/post-types.php';
  //
	// // Fonctionnalités
	// require_once get_template_directory() . '/inc/features.php';

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

function acscape_register_assets() {
wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css');
wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [ 'popper'], false, true);
wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
wp_enqueue_style('bootstrap');
wp_enqueue_style('style', get_stylesheet_uri());
wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'acscape_register_assets');

function acscape_custom_header_setup() {
  $args = array(
  'default-image' => get_template_directory_uri() . '/image/ imageheader.png',
  'width' => 2000,
  'height' => 500,
  'flex-width' => true,
  'flex-height' => true,
  );
  add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'astral_custom_header_setup' );

?>
