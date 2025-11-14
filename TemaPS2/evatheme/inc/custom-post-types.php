<?php
// CPT: Juegos
function eva_crear_cpt_juegos() {
    $labels = array(
        'name' => 'Juegos',
        'singular_name' => 'Juego',
        'menu_name' => 'Juegos',
        'add_new' => 'Agregar nuevo',
        'add_new_item' => 'Agregar nuevo juego',
        'edit_item' => 'Editar juego',
        'view_item' => 'Ver juego',
        'all_items' => 'Todos los juegos',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-games',
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'rewrite' => array('slug' => 'juegos'),
    );

    register_post_type('juegos', $args);
}

// CPT: Noticias
function eva_crear_cpt_noticias() {
    $labels = array(
        'name' => 'Noticias',
        'singular_name' => 'Noticia',
        'menu_name' => 'Noticias',
        'add_new' => 'Agregar nueva',
        'add_new_item' => 'Agregar nueva noticia',
        'edit_item' => 'Editar noticia',
        'view_item' => 'Ver noticia',
        'all_items' => 'Todas las noticias',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-media-document',
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'rewrite' => array('slug' => 'informacion', 'with_front' => false),
    );

    register_post_type('noticias', $args);
}

add_action('init', function() {
    eva_crear_cpt_juegos();
    eva_crear_cpt_noticias();
});
