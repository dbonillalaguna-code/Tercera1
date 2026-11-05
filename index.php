<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veterinaria Coyol</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <?php include 'header.php'; ?>
<main class="contenedor">
<section class="portada">
    <h1>Nosotros</h1>
    <p>Somos cuidado, amor y salud para tu mascota.</p>
  </section>

  <section class="servicios">
    <h2>Nuestros servicios</h2>
    <div class="cards" id="cards">

   

</div>
  </section>

  <section class="galeria">
    <h2>Galería</h2>
    <p>Descubre nuestros clientes satisfechos y los resultados de nuestro trabajo.</p>
    <div class="fotos">
      <img src="img/vet1.jpg" alt="Describe la foto 1">
      <img src="img/vet2.jpg" alt="Describe la foto 2">
        <img src="img/vet3.jpg" alt="Describe la foto 3">
    </div>
      </section>
      <div class="carrusel">
    <img class="slide activa" src="img/vet1.jpg" alt="Imagen 1">

    <img class="slide" src="img/vet2.jpg" alt="Imagen 2">

    <img class="slide" src="img/vet3.jpg" alt="Imagen 3">

    <button id="anterior" type="button">Anterior</button>

    <button id="siguiente" type="button">Siguiente</button>
</div>


      <section class="preguntas">
    <h2>Preguntas Frecuentes</h2>

    <div class="acordion">

        <div class="item">
            <button class="titulo">¿Pregunta 1?</button>
            <div class="contenido">
                <p>Respuesta 1</p>
            </div>
        </div>

        <div class="item">
            <button class="titulo">¿Pregunta 2?</button>
            <div class="contenido">
                <p>Respuesta 2</p>
            </div>
        </div>

        <div class="item">
            <button class="titulo">¿Pregunta 3?</button>
            <div class="contenido">
                <p>Respuesta 3</p>
            </div>
        </div>

    </div>
</section>

    

</main>
<?php include "footer.php"; ?>
<script src="js/main.js"defer></script>

</body>
</html>
