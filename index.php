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
    <div class="portada-contenido"><span class="etiqueta-portada">Cuidado veterinario cercano</span>
    <h1>La salud de tu mascota es nuestra prioridad</h1>
    <p>Somos cuidado, amor y salud para tu mascota. Te acompañamos en cada etapa de su vida.</p>
    <a class="boton boton-claro" href="servicios.php">Conoce nuestros servicios</a></div>
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
      <img src="img/vet1.jpg" alt="Mascota atendida en la veterinaria">
      <img src="img/vet2.jpg" alt="Atención y cuidado de mascotas">
        <img src="img/vet3.jpg" alt="Paciente de Veterinaria Coyol">
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
            <button class="titulo" type="button" aria-expanded="false">¿Qué servicios ofrece Veterinaria Coyol?</button>
            <div class="contenido"><p>Ofrecemos consulta general, vacunación, baño y estética, limpieza dental y procedimientos quirúrgicos según la valoración veterinaria.</p>
            </div>
        </div>

        <div class="item">
            <button class="titulo" type="button" aria-expanded="false">¿Debo agendar una cita antes de visitar?</button>
            <div class="contenido"><p>Te recomendamos contactarnos previamente para consultar disponibilidad y coordinar la atención de tu mascota.</p>
            </div>
        </div>

        <div class="item">
            <button class="titulo" type="button" aria-expanded="false">¿Cada cuánto debo vacunar a mi mascota?</button>
            <div class="contenido"><p>El calendario depende de la especie, edad, historial y estado de salud. Nuestro equipo puede orientarte con un plan adecuado.</p></div>
        </div>

        <div class="item">
            <button class="titulo" type="button" aria-expanded="false">¿Qué debo llevar a la primera consulta?</button>
            <div class="contenido"><p>Si los tienes disponibles, trae el carnet de vacunas, antecedentes médicos y cualquier información sobre medicamentos o síntomas recientes.</p></div>
        </div>
    </div>
</section>

    

</main>
<?php include "footer.php"; ?>
<script src="js/main.js" defer></script>

</body>
</html>
