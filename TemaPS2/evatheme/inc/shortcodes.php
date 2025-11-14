<?php
// === [catalogo_juegos] ===
function eva_mostrar_todos_juegos($atts) {
    $atts = shortcode_atts(['posts' => -1], $atts, 'catalogo_juegos');
    ob_start();
    get_template_part('template-parts/juegos/loop', 'juegos', ['posts' => $atts['posts']]);
    return ob_get_clean();
}
add_shortcode('catalogo_juegos', 'eva_mostrar_todos_juegos');

// === [juegos_categoria categoria="?"] ===
function eva_mostrar_juegos_categoria($atts) {
    $atts = shortcode_atts(['categoria' => '', 'posts' => -1], $atts, 'juegos_categoria');
    ob_start();
    get_template_part('template-parts/juegos/loop', 'juegos', ['categoria' => $atts['categoria'], 'posts' => $atts['posts']]);
    return ob_get_clean();
}
add_shortcode('juegos_categoria', 'eva_mostrar_juegos_categoria');

// === [catalogo_noticias] ===
function eva_mostrar_todas_noticias($atts) {
    $atts = shortcode_atts(['posts' => -1], $atts, 'catalogo_noticias');
    ob_start();
    get_template_part('template-parts/noticias/loop', 'noticias', ['posts' => $atts['posts']]);
    return ob_get_clean();
}
add_shortcode('catalogo_noticias', 'eva_mostrar_todas_noticias');

// === [gameplay] ===
function acf_gameplay_shortcode($atts) {
    $atts = shortcode_atts([
        'post_id' => get_the_ID()
    ], $atts, 'gameplay');

    $embed_code = get_field('gameplay', $atts['post_id']); 

    if ($embed_code) {
        return '<div class="gameplay-embed">' . $embed_code . '</div>';
    }

    return '<p>No hay gameplay disponible.</p>';
}
add_shortcode('gameplay', 'acf_gameplay_shortcode');
