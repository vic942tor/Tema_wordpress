<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?>>

<header>
    <div class="logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
        </a>
    </div>
    <nav>
        <?php
        wp_nav_menu([
            'theme_location' => 'menu-principal',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>',
        ]);
        ?>
    </nav>
</header>

<main>
    <h2>Últimas Noticias</h2>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="noticia">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </article>
    <?php endwhile; else : ?>
        <p>No hay noticias disponibles.</p>
    <?php endif; ?>
</main>

<footer>
    <div class="redes">
        <?php
        wp_nav_menu([
            'theme_location' => 'menu-rss',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>',
        ]);
        ?>
    </div>
    <div class="politica">
        <?php
        wp_nav_menu([
            'theme_location' => 'menu-privacidad',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>',
        ]);
        ?>
    </div>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>






