<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión
$is_logged_in = isset($_SESSION['user_id']);


// Datos almacenados del usuario
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

<section id="inicio2">

 
  <?php if ($is_logged_in): ?>
  <div class="pag2">
    <fond align="center"><h1>PANEL DE ADMINISTRACIÓN CIRUJANOS COMPUTER C.A</h1></fond>
    <h3>Bienvenido, Administrador <?php echo $user_nombre; ?> <?php echo $user_apellido; ?></h3>
  </div>
  <?php endif; ?>
  <br><br>
  <div class="pag">
    <br>
        <h3>Estimados administradores,</h3><br>
        <h4>¡Bienvenidos al corazón digital de nuestra organización! Su papel es esencial para el éxito y la excelencia de nuestra página web. Cada uno de ustedes contribuye significativamente a crear una experiencia en línea excepcional para nuestros usuarios. Sus responsabilidades incluyen:</h4>
        <br>
        <p><span style="color: black; font-size: 18px;">Gestión del Contenido: </span>Asegurar que el contenido sea relevante, preciso y atractivo, enriqueciendo la experiencia de nuestros visitantes. Piensen en ustedes mismos como los curadores de un museo digital, donde cada pieza de contenido debe brillar y captar la atención de nuestros usuarios.</p>
        <br>
        <p><span style="color: black; font-size: 18px;">Optimización SEO: </span>Implementar estrategias innovadoras para mejorar nuestro posicionamiento en los motores de búsqueda, aumentando nuestra visibilidad y alcance. Aquí es donde su creatividad entra en juego, encontrando formas ingeniosas de destacar entre la multitud y atraer a más visitantes a nuestro sitio.</p>
        <br>
        <p><span style="color: black; font-size: 18px;">Análisis de Datos: </span>Monitorear y analizar métricas clave para tomar decisiones informadas que impulsen nuestro crecimiento y mejoren continuamente nuestra plataforma. Imaginen que son detectives digitales, desentrañando misterios y descubriendo pistas que nos guiarán hacia el éxito.</p>
        <br>
        <p><span style="color: black; font-size: 18px;">Seguridad:  </span> Proteger nuestro sitio contra amenazas cibernéticas, garantizando la integridad y confidencialidad de los datos. Ustedes son los guardianes de nuestro castillo digital, siempre vigilantes y listos para defendernos de cualquier amenaza.</p>
        <br>
        <h4>Su dedicación y ética son pilares fundamentales para mantener la integridad y reputación de nuestra página web. Trabajemos juntos con transparencia y compromiso, sabiendo que cada esfuerzo cuenta para alcanzar nuestros objetivos comunes. Recuerden, cada pequeño detalle importa y juntos podemos lograr grandes cosas.</h4>
        <br>
    </div>  
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
