<?php
// Taxonomía personalizada: Categorías de juegos
function eva_crear_taxonomia_categorias_juegos() {
    $labels = array(
        'name' => 'Categorías de juegos',
        'singular_name' => 'Categoría de juego',
        'add_new_item' => 'Agregar nueva categoría',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'categoria-juego'),
    );

    register_taxonomy('categoria_juego', array('juegos'), $args);
}
add_action('init', 'eva_crear_taxonomia_categorias_juegos');
