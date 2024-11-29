<?php
session_start();
session_destroy();
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
            icon: 'success',
            title: 'Sesión cerrada',
            text: 'La sesión ha sido cerrada correctamente.',
            timer: 3500,
            showConfirmButton: false
        }).then(() => {
            loadSection('inicio');
            localStorage.setItem('selectedSection', 'inicio');
            location.reload();
        });
    </script>
</body>
</html>