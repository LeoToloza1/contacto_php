<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $asunto = $_POST['asunto'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $destinatario = "leotoloza6@gmail.com";
    $subject = "Nuevo mensaje: " . $asunto;
    $messageContent = "
    <html>
    <head>
        <title>Recibiste un nuevo mensaje</title>
    </head>
    <body style='font-family: Arial, sans-serif; color: #333; background-color: #f9f9f9; padding: 20px;'>
        <div style='max-width: 600px; margin: 0 auto; background-color: #fff; border-radius: 5px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1);'>
            <div style='background-color: #4CAF50; padding: 10px 20px; color: white; font-size: 1.2em; text-align: center;'>
                <strong>Nuevo Mensaje de Contacto</strong>
            </div>
            <div style='padding: 20px;'>
                <h2 style='color: #333;'>Detalles del mensaje</h2>
                <p><strong>Nombre:</strong> {$name}</p>
                <p><strong>Email:</strong> <a href='mailto:{$email}' style='color: #4CAF50;'>{$email}</a></p>
                <h3 style='color: #333;'>Mensaje:</h3>
                <p style='background-color: #f4f4f4; padding: 15px; border-radius: 5px;'>{$message}</p>
            </div>
            <div style='background-color: #f1f1f1; padding: 10px; text-align: center; font-size: 0.9em; color: #555;'>
                <p>Gracias por usar nuestro formulario de contacto. Responderemos a la brevedad.</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Encabezados del correo con formato HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    if (mail($destinatario, $subject, $messageContent, $headers)) {
        $alertMessage = "Su mensaje ha sido enviado exitosamente.";
        $alertType = 'success';
    } else {
        $alertMessage = "Hubo un error al enviar su mensaje. Por favor, intente nuevamente.";
        $alertType = 'error';
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../icono.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Gracias por su contacto</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <script>
        <?php if (isset($alertMessage)): ?>
            Swal.fire({
                title: "<?php echo $alertMessage; ?>",
                icon: "<?php echo $alertType; ?>",
                confirmButtonText: "Aceptar",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "../index.php";
                }
            });
        <?php endif; ?>
    </script>
</body>

</html>