<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Veterinaria Coyol</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php include "header.php"; ?>

<main class="contenedor">
    <section class="contacto-seccion">
        <div class="contacto-intro">
            <h1>Contáctanos</h1>
            <p>¿Tienes alguna consulta? Escríbenos y estaremos encantados de atenderte.</p>
            <img src="img/vet4.jpg" alt="Mascota recibiendo atención veterinaria">
        </div>

        <form action="enviar.php" method="post" class="formulario">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" autocomplete="name" required>

            <label for="correo">Email:</label>
            <input type="email" id="correo" name="correo" autocomplete="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
            <p id="mensajes" aria-live="polite"></p>
            <button type="submit">Enviar mensaje</button>
        </form>
    </section>
</main>

<?php include "footer.php"; ?>
<script src="js/main.js" defer></script>
</body>
</html>
