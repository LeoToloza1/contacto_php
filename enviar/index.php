<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $asunto = $_POST['asunto'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $destinatario = "leotoloza6@gmail.com";
    $subject = "Nuevo mensaje de contacto: " . $asunto;
    $messageContent = "Nombre: " . $name . "\n";
    $messageContent .= "Email: " . $email . "\n\n";
    $messageContent .= "Mensaje: \n" . $message;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

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