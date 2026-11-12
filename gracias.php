<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias | Veterinaria Coyol</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php include "header.php"; ?>
<main class="pagina-confirmacion">
    <div>
        <h1>Gracias por contactarnos</h1>
        <?php if (($_GET["correo"] ?? "") === "pendiente") { ?>
            <p>No se pudo enviar tu mensaje por correo. Inténtalo más tarde o contáctanos por otro medio.</p>
        <?php } else { ?>
            <p>Te responderemos a la brevedad.</p>
        <?php } ?>
        <a href="index.php" class="boton">Volver al inicio</a>
    </div>
</main>
<?php include "footer.php"; ?>
<script src="js/main.js" defer></script>
</body>
</html>
