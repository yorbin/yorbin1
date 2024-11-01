<?php
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
$sku = $_POST['sku'];
$descripcion = $_POST['descripcion'];

// Insertar datos en la base de datos
$sql = "INSERT INTO tprocedencia (sku, contiene) VALUES ('$sku', '$descripcion')";

if ($conn->query($sql) === TRUE) {
    $message = "Formulario enviado con éxito";
    $alertType = "success";
} else {
    $message = "Error: " . $sql . "<br>" . $conn->error;
    $alertType = "error";
}

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
            title: '<?php echo $alertType === "success" ? "Enviado" : "Error"; ?>',
            text: '<?php echo $message; ?>',
            timer: 3500,
            showConfirmButton: false
        }).then(() => {
            window.location.href = '../../admin.php';
        });
    </script>
</body>
</html>