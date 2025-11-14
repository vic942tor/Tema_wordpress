<?php
?>

<div class="noticia-item">
    <h2 class="titulo-noticia">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    <?php if (has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>" class="imagen-noticia">
            <?php the_post_thumbnail('medium'); ?>
        </a>
    <?php endif; ?>

    <p class="extracto-noticia">
        <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
    </p>

    <a href="<?php the_permalink(); ?>" class="leer-mas">Leer más →</a>
</div>
