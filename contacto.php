<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contacto | Veterinaria Coyol</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<?php include "header.php"; ?>

<form action="enviar.php" method="post" class="formulario">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Email:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
    <p id="mensajes"></p>
    <button type="submit">Enviar</button>
    <div class="fotos">
      <img src="img/vet4.jpg" alt="Describe la foto 4">
    </div>
</form>

</main>
<?php include "footer.php"; ?>

<script src="js/main.js"defer></script>

</body>
</html>
