<?php
$recaptcha_secret = '6Le4CikqAAAAAIghZfHo7fqMsdVoijwJuYuddE8K'; // Reemplaza con tu clave secreta de reCAPTCHA

// Verificar reCAPTCHA
$recaptcha_response = $_POST['g-recaptcha-response'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
$response_keys = json_decode($response, true);

if(intval($response_keys["success"]) !== 1) {
    $message = "Por favor, completa el reCAPTCHA.";
    $alertType = "error";
} else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form_data";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $mensaje = $_POST['mensaje'];
    $fecha = date('Y-m-d H:i:s');

    // Insertar datos en la base de datos
    $sql = "INSERT INTO form_data (usuario, nombre, correo, celular, mensaje, fecha) VALUES ('$usuario', '$nombre', '$correo', '$celular', '$mensaje', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        $message = "Formulario enviado con éxito";
        $alertType = "success";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
        $alertType = "error";
    }

    $conn->close();
}
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
            title: '<?php echo $alertType === "success" ? "Enviado" : "Error"; ?>',
            text: '<?php echo $message; ?>',
            timer: 3500,
            showConfirmButton: false
        }).then(() => {
            window.location.href = '../../index.php';
        });
    </script>
</body>
</html>