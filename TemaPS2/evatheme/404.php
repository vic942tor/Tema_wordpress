<!-- Tenía un .css para esta página pero no se por que no me quería vincular el archivo para aplicar el estilo a si que decidí hacerlo aqui por falta de tiempo, se que es menos profesional pero por lo menos funciona -->
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 - Error Brutal</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        background: #000;
        color: #9b59b6;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: 'Anton', sans-serif;
        text-align: center;
        padding: 20px;
    }

    h1 {
        font-size: 10rem;
        letter-spacing: 1rem;
        animation: shake 0.5s infinite;
    }

    h2 {
        font-size: 2rem;
        margin: 20px 0;
        text-transform: uppercase;
    }

    p {
        font-size: 1.2rem;
        color: #fff;
        margin-bottom: 40px;
        max-width: 600px;
        line-height: 1.5;
    }

    a {
        text-decoration: none;
        color: #000;
        background: #9b59b6;
        padding: 15px 30px;
        font-weight: bold;
        border-radius: 5px;
        transition: 0.3s;
    }

    a:hover {
        background: #fff;
        color: #9b59b6;
    }

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
</style>
</head>
<body>
    <h1>404</h1>
    <h2>¡Error!</h2>
    <p>La página que buscas no existe. Alguien la cagó en el servidor o escribiste algo mal. Lo único seguro es que dudamos que quisieras estar aquí.</p>
    <a href="/">Vuelve al menú principal y respira hondo</a>
</body>
</html>
