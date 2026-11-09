<?php
$errores = [];
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contacto.php");
    exit;
}
$nombre = trim($_POST["nombre"] ?? "");
$email = trim($_POST["correo"] ?? "");
$mensaje = trim($_POST["mensaje"] ?? "");
if ($nombre === "") $errores[] = "El nombre es obligatorio.";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "El correo no es válido.";
if ($mensaje === "") $errores[] = "El mensaje es obligatorio.";
if (!$errores) {
    // Sustituye esta dirección por el correo real y configura SMTP en el servidor.
    $destinatario = "info@tuempresa.com";
    $asunto = "Nuevo mensaje de contacto - Veterinaria Coyol";
    $cuerpo = "Nombre: {$nombre}\nCorreo: {$email}\n\nMensaje:\n{$mensaje}";
    $cabeceras = "From: no-reply@tuempresa.com\r\n" . "Reply-To: {$email}\r\n" . "Content-Type: text/plain; charset=UTF-8";
    if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
        header("Location: gracias.php");
        exit;
    }
    $errores[] = "No fue posible enviar el mensaje. Configura el servicio de correo o inténtalo más tarde.";
}
?>
<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Revisar formulario | Veterinaria Coyol</title><link rel="stylesheet" href="css/estilos.css"></head>
<body><?php include "header.php"; ?><main class="contenedor pagina-confirmacion"><div><h1>Revisa el formulario</h1><ul><?php foreach ($errores as $error) { echo "<li>" . htmlspecialchars($error, ENT_QUOTES, "UTF-8") . "</li>"; } ?></ul><a href="contacto.php" class="boton">Volver al formulario</a></div></main><?php include "footer.php"; ?><script src="js/main.js" defer></script></body></html>
