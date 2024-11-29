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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sku = $_POST['sku'];
    $descripcion = $_POST['descripcion'];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO tlinea (sku, contiene) VALUES ('$sku', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        $message = "Formulario enviado con éxito";
        $alertType = "success";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
        $alertType = "error";
    }
}

// Eliminar registro
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    if ($conn->query("DELETE FROM tlinea WHERE id=$id") === TRUE) {
        $message = "Registro eliminado con éxito";
        $alertType = "success";
    } else {
        $message = "Error al eliminar el registro: " . $conn->error;
        $alertType = "error";
    }
}

// Obtener registros
$result = $conn->query("SELECT * FROM tlinea");

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirigiendo...</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <script>
        <?php if (isset($message)): ?>
        Swal.fire({
            icon: '<?php echo $alertType; ?>',
            title: '<?php echo $alertType === "success" ? "Enviado" : "Error"; ?>',
            text: '<?php echo $message; ?>',
            timer: 3500,
            showConfirmButton: false
        }).then(() => {
            window.location.href = '../../admin.php';
        });
        <?php endif; ?>
    </script>

    <?php if (!isset($message)): ?>
    <table id="linea-table">
        <thead>
            <tr>
                <th>SKU</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['sku']; ?></td>
                <td><?php echo $row['contiene']; ?></td>
                <td class="bcaction"> 
                    <a href="assets/php/Lineadef.php?edit=<?php echo $row['Id']; ?>" class="edit-btn"><i class="fas fa-edit"></i></a>
                <td class="bcaction">
                   <a href="assets/php/Lineadef.php?delete=<?php echo $row['Id']; ?>" class="delete-btn"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php endif; ?>
</body>
</html>