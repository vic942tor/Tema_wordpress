<?php
// Recoge los argumentos pasados por get_template_part()
$passed = isset($args) && is_array($args) ? $args : [];

// Preparar argumentos para WP_Query
$query_args = [
    'post_type'      => 'juegos',
    'posts_per_page' => isset($passed['posts']) ? intval($passed['posts']) : -1,
];

// Si se pasó categoría, añadimos tax_query
if (!empty($passed['categoria'])) {
    $query_args['tax_query'] = [
        [
            'taxonomy' => 'categoria_juego',
            'field'    => 'slug',
            'terms'    => $passed['categoria'],
        ]
    ];
}
$query = new WP_Query($query_args);
if ($query->have_posts()) : ?>
    <div class="catalogo-juegos">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php get_template_part('template-parts/juegos/content', 'juego'); ?>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <p>No hay juegos que mostrar.</p>
<?php endif;
wp_reset_postdata();
