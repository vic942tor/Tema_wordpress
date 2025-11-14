<?php
// Cargar estilos
function eva_enqueue_scripts() {
    wp_enqueue_style('eva-style', get_stylesheet_uri());
    wp_enqueue_style('eva-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'eva_enqueue_scripts');
