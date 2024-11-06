<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icono.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Formulario de contacto</title>
</head>

<body>
    <div class="contenedor">
        <h1 class="titulo">Formulario de contacto</h1>
        <form action="/enviar/" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" name="name" placeholder="Ingrese su nombre" id="name" required>

            <label for="asunto">Asunto:</label>
            <input type="text" name="asunto" placeholder="Ingrese el Asunto" id="asunto" required>

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Ingrese su email" id="email" required>

            <label for="message">Mensaje:</label>
            <textarea name="message" id="message" placeholder="Ingrese su mensaje" cols="30" rows="3"
                required></textarea>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <footer class="footer">
        <p>Conecta conmigo:</p>
        <div class="social-links">
            <a href="https://github.com/LeoToloza1" target="_blank" class="icon github"><i class="fab fa-github"></i>
                GitHub</a>
            <a href="https://linkedin.com/in/leonel-toloza/" target="_blank" class="icon linkedin"><i
                    class="fab fa-linkedin"></i> LinkedIn</a>

        </div>
    </footer>
</body>

</html>