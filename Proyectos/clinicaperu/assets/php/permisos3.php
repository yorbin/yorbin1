<?php
// permisos3.php

// Iniciar sesión si no está iniciada
if (!isset($_SESSION)) {
    session_start();
}

// Verificar si el usuario tiene un nivel de privilegio igual o superior a 3
if (!isset($_SESSION['priv_user']) || $_SESSION['priv_user'] < 3) {
    // Redirigir al usuario a una página de acceso denegado o login
    $message = "Acceso denegado. Privilegios insuficientes.";
    $alertType = "error";
    $redirectUrl = 'index.php';
    $section = 'inicio';
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Redirigiendo...</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>
    <body>
        <script>
            Swal.fire({
                icon: '<?php echo $alertType; ?>',
                title: '<?php echo $message; ?>',
                text: 'Redirigiendo...',
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                localStorage.setItem('selectedSection', '<?php echo $section; ?>');
                window.location.href = '<?php echo $redirectUrl; ?>';
            });
        </script>
    </body>
    </html>
    <?php
}

// Si el usuario tiene un nivel de privilegio igual o superior a 3, permitirle acceder
?>