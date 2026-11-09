const btnMenu = document.querySelector("#btnmenu");
const menu = document.querySelector("#menu");
if (btnMenu && menu) {
  btnMenu.addEventListener("click", () => {
    const abierto = menu.classList.toggle("abierto");
    btnMenu.classList.toggle("activo", abierto);
    btnMenu.setAttribute("aria-expanded", String(abierto));
    btnMenu.setAttribute("aria-label", abierto ? "Cerrar menú" : "Abrir menú");
  });
  menu.querySelectorAll("a").forEach((enlace) => enlace.addEventListener("click", () => {
    menu.classList.remove("abierto");
    btnMenu.classList.remove("activo");
    btnMenu.setAttribute("aria-expanded", "false");
    btnMenu.setAttribute("aria-label", "Abrir menú");
  }));
}

// Acordeón //
 document.querySelectorAll(".acordion .titulo").forEach((titulo) => {
  titulo.addEventListener("click", () => {
    const item = titulo.closest(".item");
    const abrir = !item.classList.contains("activo");
    document.querySelectorAll(".acordion .item").forEach((otro) => {
      otro.classList.remove("activo");
      const boton = otro.querySelector(".titulo");
      if (boton) boton.setAttribute("aria-expanded", "false");
    });
    if (abrir) {
      item.classList.add("activo");
      titulo.setAttribute("aria-expanded", "true");
    }
  });
});

// Seis tarjetas de servicios destacados
const servicios = [
  {titulo:"Consulta general", precio:8000, img:"img/vet1.jpg", alt:"Mascota durante una consulta"},
  {titulo:"Vacunación", precio:5000, img:"img/vet2.jpg", alt:"Atención preventiva para mascotas"},
  {titulo:"Control de salud", precio:10000, img:"img/vet3.jpg", alt:"Revisión veterinaria"},
  {titulo:"Cuidado y bienestar", precio:7500, img:"img/vet8.jpg", alt:"Cuidado de una mascota"},
  {titulo:"Orientación veterinaria", precio:6500, img:"img/vet9.jpg", alt:"Profesional atendiendo una mascota"},
  {titulo:"Higiene y estética", precio:9000, img:"img/vet10.jpg", alt:"Servicio de higiene para mascotas"}
];
const contenedorCards = document.querySelector("#cards");
if (contenedorCards) {
  servicios.forEach((servicio) => {
    const tarjeta = document.createElement("article");
    tarjeta.className = "tarjeta";
    const imagen = document.createElement("img");
    imagen.src = servicio.img; imagen.alt = servicio.alt; imagen.loading = "lazy";
    const titulo = document.createElement("h3"); titulo.textContent = servicio.titulo;
    const precio = document.createElement("p");
    precio.textContent = `Precio de referencia: ₡${servicio.precio.toLocaleString("es-CR")}`;
    tarjeta.append(imagen, titulo, precio);
    contenedorCards.appendChild(tarjeta);
  });
}

// Carrusel
const slides = document.querySelectorAll(".slide");
let actual = 0;
function mostrarSlide(indice) {
  slides.forEach((slide, i) => slide.classList.toggle("activa", i === indice));
}
const siguiente = document.querySelector("#siguiente");
const anterior = document.querySelector("#anterior");
if (slides.length && siguiente && anterior) {
  siguiente.addEventListener("click", () => { actual = (actual + 1) % slides.length; mostrarSlide(actual); });
  anterior.addEventListener("click", () => { actual = (actual - 1 + slides.length) % slides.length; mostrarSlide(actual); });
}

// Validación adicional del formulario (el navegador también valida required y type=email)
const formulario = document.querySelector(".formulario");
if (formulario) {
  formulario.addEventListener("submit", (evento) => {
    const nombre = formulario.elements.nombre.value.trim();
    const correo = formulario.elements.correo.value.trim();
    const mensaje = formulario.elements.mensaje.value.trim();
    const salida = document.querySelector("#mensajes");
    const errores = [];
    if (!nombre) errores.push("El nombre es obligatorio.");
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo)) errores.push("Escribe un correo electrónico válido.");
    if (!mensaje) errores.push("El mensaje es obligatorio.");
    if (errores.length) { evento.preventDefault(); if (salida) salida.textContent = errores.join(" "); }
  });
}
