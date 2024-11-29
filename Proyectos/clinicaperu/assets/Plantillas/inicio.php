<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión
$is_logged_in = isset($_SESSION['user_id']);

if ($is_logged_in) {
  $user_name = $_SESSION['user_name'];
  $user_nombre = $_SESSION['user_nombre'];
  $user_apellido = $_SESSION['user_apellido'];
} else {

}

?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script>
          const servicioVer = document.getElementById('servicioVer');
            if (servicioVer) {
                console.log('servicioVer found:', servicioVer);
                servicioVer.addEventListener('click', function(event) {
                    event.preventDefault();
                    console.log('servicioVer clicked');
                    loadSection('servicios');
                    localStorage.setItem('selectedSection', 'servicios');
                });
            } else {
                alert('servicioVer not found');
            }
    </script>
  <style>
    #inicio {
        padding: 2px;
    }    

    .pag2 {
        background: #f3effa;
    }

    .carrusel {
        position: relative;
        width: 100%;
        height: 400px;
        background: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        border-radius: 10px;
    }

    .carrusel-contenedor {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        transition: transform 0.9s ease-in-out;
    }

    .carrusel-item {
        min-width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        position: absolute; /* Change from relative to absolute */
        transition: opacity 1.5s ease-in-out;
        opacity: 0;
        border-radius: 10px;
    }

    .carrusel-item.activo {
        opacity: 1;
        position: relative; /* Ensure the active item is positioned correctly */
    }

    .carrusel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        border-radius: 10px;
    }

    .carrusel-item .contenido {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        position: relative;
        z-index: 2;
        color: #fff;
        padding: 100px;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
    }

    .carrusel-item h2 {
        font-size: 24px;
        margin-top: 0;
    }

    .carrusel-item p {
        font-size: 18px;
    }

    .carrusel-controles {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
        z-index: 3;
    }

    .carrusel-anterior, .carrusel-siguiente {
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    .carrusel-anterior:hover, .carrusel-siguiente:hover {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .carrusel-indicadores {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 5px;
        z-index: 3;
    }

    .carrusel-indicador {
        width: 10px;
        height: 10px;
        background-color: #ccc;
        border-radius: 50%;
        cursor: pointer;
    }

    .carrusel-indicador.activo {
        background-color: #333;
    }

    @media (max-width: 768px) {
        .carrusel-item .contenido {
            padding: 40px;
        }
        .carrusel-controles {
            display: none;
        }
    }
  </style>
</head>

<section id="inicio">

  <main>
    <div class="carrusel">
      <div class="carrusel-contenedor">
        <div class="carrusel-item carrusel-item2 activo">
          <img src="assets/img/analisis.jpg" alt="Imagen 1">
          <div class="contenido">
            <h2>Análisis y Resolución de Problemas</h2>
            <p>En nuestra empresa, ofrecemos servicios de análisis y resolución de problemas en sistemas informáticos. Nuestros expertos en tecnología trabajan para identificar y solucionar problemas en su sistema, brindando reparación de sistemas, recuperación de programas y eliminación de virus y malware. Además, ofrecemos soporte remoto para resolver problemas de manera rápida y eficiente.</p>
          </div>
        </div>
        <div class="carrusel-item">
          <img src="assets/img/respaldo.jpg" alt="Imagen 2">
          <div class="contenido">
            <h2>Respaldos y Recuperación de Datos</h2>
            <p>La pérdida de datos puede ser un desastre para cualquier negocio o individuo. Por eso, ofrecemos servicios de respaldo de datos para asegurarnos de que sus archivos importantes estén seguros. Nuestros servicios de respaldo incluyen respaldo de fotos, imágenes y música, para que pueda recuperar sus archivos en caso de una emergencia.</p>
          </div>
        </div>
        <div class="carrusel-item">
          <img src="assets/img/instalacion.jpg" alt="Imagen 3">
          <div class="contenido">
            <h2>Instalación de Sistemas y Software</h2>
            <p>Nuestra empresa ofrece servicios de instalación de sistemas operativos y software de seguridad. Instalamos sistemas operativos como Windows 7, 8, 10, 11 y Linux - Debian, así como antivirus, ofimática y programas de diseño. Nuestros expertos en tecnología trabajan para asegurarse de que su sistema esté configurado correctamente y listo para usar.</p>
          </div>
        </div>
        <div class="carrusel-item">
          <img src="assets/img/soporte.jpg" alt="Imagen 4">
          <div class="contenido">
            <h2>Soporte de Seguridad</h2>
            <p>La seguridad es fundamental para cualquier negocio o individuo. Por eso, ofrecemos servicios de soporte para cámaras de seguridad, capitán huellas, bioseguridad, cercados, circuito cerrado y DVR. Nuestros expertos en seguridad trabajan para asegurarse de que su sistema de seguridad esté funcionando correctamente y protegiendo sus activos.</p>
          </div>
        </div>
        <div class="carrusel-item">
          <img src="assets/img/electronica.jpg" alt="Imagen 5">
          <div class="contenido">
            <h2>Electrónica y Reparación</h2>
            <p>En nuestra empresa, ofrecemos servicios de reparación de teléfonos, portátiles y PC. Nuestros expertos en electrónica trabajan para reparar problemas de hardware y software, incluyendo la reparación de pantallas táctiles, fuentes de poder, monitores y TV, y placas madre.</p>
          </div>
        </div>
        <div class="carrusel-item">
          <img src="assets/img/redes.jpg" alt="Imagen 6">
          <div class="contenido">
          <h2>Redes y Conexiones</h2>
          <p>Nuestra empresa ofrece servicios de configuración y reparación de redes y conexiones. Nuestros expertos en redes trabajan para asegurarse de que su red esté configurada correctamente, incluyendo la configuración de servidores, router y switch, modem y roseta, y conmutador telefónico.</p>
          </div>
        </div>
      </div>
      <div class="carrusel-controles">
        <button class="carrusel-anterior"><i class="fas fa-chevron-left"></i></button>
        <button class="carrusel-siguiente"><i class="fas fa-chevron-right"></i></button>
      </div>
      <div class="carrusel-indicadores"></div>
    </div>
    <div style="text-align: center;"><p><a id="servicioVer" style="color: rgb(0, 0, 0); text-decoration: underline;">Ver Servicios</a></p></div>
  </main>
  <br><br>
  <?php if ($is_logged_in): ?>
  <div class="pag2">
    <fond align="center"><h1>BIENVENIDO A CIRUJANOS COMPUTER C.A</h1></fond>
    <h3>Bienvenido, <?php echo $user_nombre; ?> <?php echo $user_apellido; ?></h3>
  </div>
  <?php endif; ?>
</section>
<script>
    const carrusel = document.querySelector('.carrusel');
    const carruselContenedor = document.querySelector('.carrusel-contenedor');
    const carruselItems = document.querySelectorAll('.carrusel-item');
    const carruselAnterior = document.querySelector('.carrusel-anterior');
    const carruselSiguiente = document.querySelector('.carrusel-siguiente');
    const carruselIndicadores = document.querySelector('.carrusel-indicadores');

    let indiceActual = 0;
    let intervalo;
    let touchStart = 0;
    let touchEnd = 0;

    // Mostrar el primer elemento al inicio
    carruselItems[indiceActual].classList.add('activo');
    crearIndicadores();
    iniciarCarrusel();

    // Eventos de los botones
    carruselAnterior.addEventListener('click', () => {
        cambiarItem(indiceActual - 1);
    });

    carruselSiguiente.addEventListener('click', () => {
        cambiarItem(indiceActual + 1);
    });

    // Crear indicadores
    function crearIndicadores() {
        carruselItems.forEach((item, index) => {
            const indicador = document.createElement('div');
            indicador.classList.add('carrusel-indicador');
            if (index === indiceActual) {
                indicador.classList.add('activo');
            }
            indicador.addEventListener('click', () => {
                cambiarItem(index);
            });
            carruselIndicadores.appendChild(indicador);
        });
    }

    // Cambiar el elemento del carrusel actual
    function cambiarItem(indice) {
        carruselItems[indiceActual].classList.remove('activo');
        carruselIndicadores.children[indiceActual].classList.remove('activo');
        indiceActual = (indice + carruselItems.length) % carruselItems.length;
        carruselItems[indiceActual].classList.add('activo');
        carruselIndicadores.children[indiceActual].classList.add('activo');
    }

    // Iniciar el carrusel automático
    function iniciarCarrusel() {
        intervalo = setInterval(() => {
            cambiarItem(indiceActual + 1);
        }, 5000);
    }

    // Pausar el carrusel al pasar el mouse
    carrusel.addEventListener('mouseover', () => {
        clearInterval(intervalo);
    });

    // Reanudar el carrusel al quitar el mouse
    carrusel.addEventListener('mouseout', () => {
        iniciarCarrusel();
    });

    // Eventos de touch para móviles
    carrusel.addEventListener('touchstart', (e) => {
        touchStart = e.touches[0].clientX;
    });

    carrusel.addEventListener('touchend', (e) => {
        touchEnd = e.changedTouches[0].clientX;
        if (touchEnd - touchStart > 50) {
            cambiarItem(indiceActual - 1);
        } else if (touchEnd - touchStart < -50) {
            cambiarItem(indiceActual + 1);
        }
    });

    // Ocultar botones en móviles
    if (window.matchMedia("(max-width: 768px)").matches) {
        carruselAnterior.style.display = 'none';
        carruselSiguiente.style.display = 'none';
    }
</script>
