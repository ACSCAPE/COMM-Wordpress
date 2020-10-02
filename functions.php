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

function acscape_register_assets () {
  wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css', []);
  wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
  wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
  wp_deregister_script('jquery');
  wp_register_script('https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
  wp_enqueue_style('bootstrap');
  wp_enqueue_script('bootstrap');
}

?>
