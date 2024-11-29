<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión
$is_logged_in = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum y Portafolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script defer src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="sidebar">
        <div class="toggle-btn toggle-btn2">
            <span>&#9776;</span>
        </div>
        <br>
        <ul>
        <?php if ($is_logged_in): ?>
                <img src="logos/usuario.png" alt="Foto-perfil" class="perfilfoto">
                <?php endif; ?>
        <ul class="lista-menu">
        <?php if ($is_logged_in): ?>
            <li class="menu-item" data-section="Perfil"><i class="fas fa-user-circle"></i><span>Perfil</span></li>
            <li class="menu-item" data-section="Notificaciones"><i class="fas fa-bell"></i><span>Notificaciones</span></li>
            <li class="menu-item" data-section="Seguridad"><i class="fas fa-lock"></i><span>Seguridad</span></li>
            <?php endif; ?>
            <li class="menu-item" data-section="contacto"><i class="fas fa-envelope"></i><span>Contacto/Reportar</span></li>
            <div class="lista-menumovil">
                <li class="menu-item" data-section="inicio"><i class="fas fa-home"></i><span>Inicio</span></li>
                <li class="menu-item" data-section="sobre-mi"><i class="fas fa-user"></i><span>¿Quiénes Somos?</span></li>
                <li class="menu-item" data-section="articulos"><i class="fas fa-newspaper"></i><span>Articulos</span></li>
                <li class="menu-item" data-section="portafolio"><i class="fas fa-briefcase"></i><span>Portafolio</span></li>
            </div>
            <?php if ($is_logged_in): ?>
            <?php if ($_SESSION['priv_user'] >= 3): ?>
                <li class="menu-item" data-section="inicio2">
                <a href="admin.php" style="display: block; width: 100%; height: 100%;">
                   <i class="fas fa-cog white-icon" style="color: #FFFFFF;"></i><span class="white-text" style="color: #FFFFFF;">Administración</span>
                       </a>
                   </li>
            <?php endif; ?>
            <?php endif; ?>
            <?php if ($is_logged_in): ?>
            <li class="menu-item"  data-section="logout"><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesión</span></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="content">
        <header>
            <div>
                <img src="lo.jpeg" alt="Foto-perfil" class="logo">
            </div>
            <div>
            <h1><i class="fas fa-user-md"></i> Cirujanos Computer C.A</h1>
        </div>
        </header>
        <div class="sub-header">
            <ul class="menu-header">
                <div class="toggle-btn toggle-btn1">
                    <span>&#9776;</span>
                </div>
                <div class="movilmenusub">
                <li class="menu-item" data-section="inicio"><i class="fas fa-home"></i><span>Inicio</span></li>
                <li class="menu-item" data-section="sobre-mi"><i class="fas fa-user"></i><span>¿Quiénes Somos?</span></li>
                <li class="menu-item" data-section="articulos"><i class="fas fa-newspaper"></i><span>Articulos</span></li>
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
