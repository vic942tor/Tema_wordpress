<div class="juego-item">
    <?php if (has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium'); ?>
        </a>
    <?php endif; ?>
    <h2 class="titulo-juego">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
</div>
