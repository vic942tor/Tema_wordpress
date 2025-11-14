<?php get_header(); ?>
<main style="display:flex; flex-direction:column; justify-content:center; align-items:center; height:80vh; text-align:center; background:#000; color:#9b59b6; font-family:'Anton', sans-serif;">
    <h1 style="font-size:8rem; letter-spacing:1rem; animation:shake 0.5s infinite;">404</h1>
    <h2 style="font-size:2rem; margin:20px 0; text-transform:uppercase;">¡No deberías estar aquí!</h2>
    <p style="font-size:1.2rem; max-width:600px; color:#fff; margin-bottom:40px; line-height:1.5;">
        Te adentraste donde nadie entra. Esto no es un error bonito: alguien la cagó.
    </p>
    <a href="/" style="text-decoration:none; color:#000; background:#9b59b6; padding:15px 30px; font-weight:bold; border-radius:5px; transition:0.3s;">Vuelve al inicio</a>
</main>

<style>
    @keyframes shake {
        0% { transform: translate(1px, 1px) rotate(0deg); }
        10% { transform: translate(-1px, -2px) rotate(-1deg); }
        20% { transform: translate(-3px, 0px) rotate(1deg); }
        30% { transform: translate(3px, 2px) rotate(0deg); }
        40% { transform: translate(1px, -1px) rotate(1deg); }
        50% { transform: translate(-1px, 2px) rotate(-1deg); }
        60% { transform: translate(-3px, 1px) rotate(0deg); }
        70% { transform: translate(3px, 1px) rotate(-1deg); }
        80% { transform: translate(-1px, -1px) rotate(1deg); }
        90% { transform: translate(1px, 2px) rotate(0deg); }
        100% { transform: translate(1px, -2px) rotate(-1deg); }
    }

    a:hover {
        background:#fff;
        color:#9b59b6;
    }
</style>

<?php get_footer(); ?>
