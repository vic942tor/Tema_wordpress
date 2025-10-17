<?php
function noticias_victor_setup() {
    register_nav_menus([
        'menu-principal' => 'Menú Principal',
        'menu-rss' => 'Menú RSS',
        'menu-privacidad' => 'Menú Políticas de Privacidad'
    ]);
}
add_action('after_setup_theme', 'noticias_victor_setup');

function noticias_victor_estilos() {
    wp_enqueue_style('noticias-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'noticias_victor_estilos');
?>






