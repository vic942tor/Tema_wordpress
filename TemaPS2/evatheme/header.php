<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="eva-header">
  <div class="eva-header__container">
    
    <!-- Logo del sitio -->
    <div class="eva-header__logo">
      <a href="<?php echo home_url(); ?>">
        <?php
        if ( has_site_icon() ) {
            // Muestra el icono del sitio como logo
            $site_icon_url = get_site_icon_url(128);
            echo '<img src="' . esc_url($site_icon_url) . '" alt="' . get_bloginfo('name') . ' logo">';
        } else {
            // Texto si no hay icono
            echo '<h1>' . get_bloginfo('name') . '</h1>';
        }
        ?>
      </a>
    </div>

    <!-- Checkbox oculto para menú responsive -->
    <input type="checkbox" id="menu-toggle" class="eva-menu-checkbox" aria-label="Abrir menú">

    <!-- Icono hamburguesa (solo visible en móvil) -->
    <label for="menu-toggle" class="eva-menu-toggle">
      ☰
    </label>

    <!-- Menú principal -->
    <nav class="eva-header__nav">
      <?php
      wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container'      => false,
          'menu_class'     => 'eva-menu',
      ));
      ?>
    </nav>

    <!-- Botón derecho -->
    <div class="eva-header__button">
      <a href="<?php echo site_url('/'); ?>" class="eva-btn">Level Up DEVA</a>
    </div>

  </div>
</header>


