<?php
// Soporte básico del tema
function eva_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    // Registrar menú principal
    register_nav_menus(array(
        'main-menu' => __('Menú principal', 'eva')
    ));

    // Editor de bloques usa el mismo CSS
    add_theme_support('editor-styles');
    add_editor_style('assets/css/main.css');
}
add_action('after_setup_theme', 'eva_theme_setup');

// Refrescar reglas tras activar el tema
function eva_flush_rewrite_rules() {
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'eva_flush_rewrite_rules');
