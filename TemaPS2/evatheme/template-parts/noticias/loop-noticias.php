<?php
$args = [
    'post_type'      => 'noticias',
    'posts_per_page' => $args['posts'] ?? -1,
    'order'          => 'DESC',
    'orderby'        => 'date'
];

$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <div class="catalogo-noticias">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php get_template_part('template-parts/noticias/content', 'noticia'); ?>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <p>No hay noticias disponibles en este momento.</p>
<?php endif;

wp_reset_postdata();
