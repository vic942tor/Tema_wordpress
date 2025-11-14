<?php
/*
Template Name: Contacto
*/
get_header();
?>

<main class="contact-page">

    <?php
// Mostrar el contenido de la página desde el editor
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>

    <h2>Formulario de Contacto</h2>

    <form class="contact-form" action="#" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" placeholder="Tu nombre" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" placeholder="Tu correo" required>

        <label for="subject">Asunto:</label>
        <input type="text" id="subject" name="subject" placeholder="Asunto">

        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" rows="5" placeholder="Escribe tu mensaje..." required></textarea>

        <button type="submit">Enviar</button>
    </form>

</main>

<?php get_footer(); ?>