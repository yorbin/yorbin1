<?php
session_start(); // Iniciar la sesión

$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "master";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $clave, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$usu = $_POST['username'];
$clave = $_POST['password'];

// Preparar la consulta
$stmt = $conn->prepare("SELECT * FROM login WHERE usu_login=?");
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

// Vincular el parámetro
$stmt->bind_param("s", $usu);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Verificar la contraseña (sin cifrado)
    if ($clave === $row['clave']) {
        // Guardar información del usuario en la sesión
        $_SESSION['usuario'] = $row['usu_login'];
        
        $message = "Inicio de sesión exitoso";
        $alertType = "success";
        $redirectUrl = '../../panel.php';
    } else {
        // Contraseña inválida
        $message = "Credenciales incorrectas. Inténtalo de nuevo.";
        $alertType = "error";
        $redirectUrl = '../../index.php';
    }
} else {
    // Nombre de usuario inválido
    $message = "Credenciales incorrectas. Inténtalo de nuevo.";
    $alertType = "error";
    $redirectUrl = '../../index.php';
}

$stmt->close();
$conn->close();
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
            window.location.href = '<?php echo $redirectUrl; ?>';
        });
    </script>
</body>
</html>