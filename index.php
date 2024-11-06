<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icono.png" type="image/x-icon">

    <title>Formulario de contacto</title>
</head>

<body>
    <div class="contenedor">
        <h1 class="titulo">Formulario de contacto</h1>
        <form action="/enviar/" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" required>

            <label for="asunto">Asunto:</label>
            <input type="text" name="asunto" id="asunto" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="message">Mensaje:</label>
            <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>

</html>