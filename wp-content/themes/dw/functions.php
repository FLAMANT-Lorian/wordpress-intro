<?php

// Gutenberg est le nouvel éditeur de contenu propre a WordPress
// Il ne nous intéresse pas pour l'utilisation du thème que nous allons créer
// On va le désactiver :

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );

// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

// Disable default front-end styles.
add_action( 'wp_enqueue_scripts', function() {
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );
    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );
    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );
}, 20 );


//Pour le post_type dans le tableaux support (Activer l'utilisations des images de couvertures sur nos post_type)
add_theme_support( 'post-thumbnails', ['recipe', 'country']);


// Enregistrer de nouveaux "types de contenu", qui seront stockés dans la table "wp_posts", avec un identifiant de type spécifique dans la collone 'post_type"

register_post_type('recipe', [
    'label' => 'Recettes',
    'description' => 'Les recettes liées à nos voyages',
    'menu_position' => 6, /*Position dans l'admin wordpress => Voir les position su internet*/
    'menu_icon' => 'dashicons-carrot',
    'public' => true,
    'rewrite' => [
        'slug' => 'recettes',
    ],
    'supports' => [
        'title', 'editor', 'excerpt', 'thumbnail',
    ],
]);

register_post_type('country', [
    'label' => 'Pays',
    'description' => 'Un joli voyage',
    'menu_position' => 7,
    'menu_icon' => 'dashicons-admin-site',
    'public' => true,
    'rewrite' => [
        'slug' => 'pays',
    ],
    'supports' => [
        'title', 'editor', 'excerpt', 'thumbnail',
    ],
]);