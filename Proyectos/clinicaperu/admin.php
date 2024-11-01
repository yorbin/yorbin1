
<?php
session_start(); // Iniciar la sesión
require_once 'assets/php/permisos3.php';
// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    // Incluir el script de SweetAlert2 en el <head>


  }
  $is_logged_in = isset($_SESSION['user_id']);

// Aquí puedes usar la información del usuario almacenada en la sesión
$user_name = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum y Portafolio</title>
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script defer src="script2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="sidebar">
        <div class="toggle-btn toggle-btn2">
            <span>&#9776;</span>
        </div>
        <br>
        <ul>
        <ul class="lista-menu">
        <?php if ($is_logged_in): ?>
            <li class="menu-item" data-section="Perfil"><i class="fas fa-user-circle"></i><span>Perfil</span></li>
            <li class="menu-item" data-section="Notificaciones"><i class="fas fa-bell"></i><span>Notificaciones</span></li>
            <li class="menu-item" data-section="Seguridad"><i class="fas fa-lock"></i><span>Seguridad</span></li>
            <?php endif; ?>
            <li class="menu-item" data-section="contacto"><i class="fas fa-envelope"></i><span>Contacto/Reportar</span></li>
            <div class="lista-menumovil">
                <li class="menu-item" data-section="inicio2"><i class="fas fa-home"></i><span>Inicio</span></li>
                <li class="menu-item" data-section="sobre-mi"><i class="fas fa-user"></i><span>¿Quiénes Somos?</span></li>
                <li class="menu-item" data-section="articulosagregar"><i class="fas fa-newspaper"></i><span>articulosagregar</span></li>
                <li class="menu-item" data-section="portafolio"><i class="fas fa-briefcase"></i><span>Portafolio</span></li>
            </div>
            <?php if ($is_logged_in): ?>
            <?php if ($_SESSION['priv_user'] >= 3): ?>
                <li class="menu-item" data-section="grudarticulos"><i class="fas fa-newspaper"></i><span>GrudArticulos</span></li>
                <li class="menu-item" data-section="Inventario"><i class="fas fa-warehouse"></i><span>Inventario</span></li>
                <li class="menu-item" data-section="Ventas"><i class="fas fa-shopping-cart"></i><span>Ventas</span></li>
                <li class="menu-item" data-section="Compras"><i class="fas fa-shopping-bag"></i><span>Compras</span></li>
            <?php endif; ?>
            <li class="menu-item" data-section="inicio">
                <a href="index.php" style="display: block; width: 100%; height: 100%;">
                <i class="fas fa-arrow-left white-icon" style="color: #FFFFFF;"></i><span class="white-text" style="color: #FFFFFF;">Volver Inicio</span>
                       </a>
                   </li>
            <?php endif; ?>
            <?php if ($is_logged_in): ?>
            <li class="menu-item"  data-section="logout"><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesión</span></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="content">

        <div class="sub-header">
            <ul class="menu-header">
                <div class="toggle-btn toggle-btn1">
                    <span>&#9776;</span>
                </div>
                <div class="movilmenusub">
                <li class="menu-item" data-section="inicio2"><i class="fas fa-home"></i><span>Inicio</span></li>
                <li class="menu-item" data-section="sobre-mi"><i class="fas fa-user"></i><span>¿Quiénes Somos?</span></li>
                <li class="menu-item" data-section="articulosagregar"><i class="fas fa-newspaper"></i><span>articulosagregar</span></li>
                <li class="menu-item" data-section="portafolio"><i class="fas fa-briefcase"></i><span>Portafolio</span></li>
               </div>
            </ul>

        </div>
        <?php if (!$is_logged_in): ?>
        <div class="sub-header" style="background: #380947;">
            <ul class="menu-header">
                <div class="toggle-btn toggle-btn1">
                    <li class="menu-item" data-section="login"><i class="fas fa-lock"></i><span>Iniciar sesión</span></li>|
                    <li class="menu-item" data-section="registro"><i class="fas fa-user"></i><span>Registrarse</span></li>
                </div>
                <div class="movilmenusub">
                    <li class="menu-item" data-section="login"><i class="fas fa-lock"></i><span>Iniciar sesión</span></li>|
                <li class="menu-item" data-section="registro"><i class="fas fa-user"></i><span>Registrarse</span></li>

               </div>
            </ul>

        </div>
        <?php endif; ?>
        <br>
        <div class="todo">
            <h1 class="h1l" id="section-title">Inicio</h1>
        </div>
        <div id="main-content">
            <!-- Contenido de la sección se cargará aquí -->
        </div>
        <footer><p>&copy; 2024, Cirujanos Computer C.A, Derechos reservados.</p></footer>
    </div>
    
</body>
</html>
