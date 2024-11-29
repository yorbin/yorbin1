<?php
session_start(); // Iniciar la sesión
require_once '../php/permisos3.php';
require_once '../php/conexion.php'; // Asegúrate de tener un archivo de conexión a la base de datos

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['error' => 'Usuario no autenticado']);
    exit();
}

// Obtener el SKU del artículo
$sku = isset($_GET['sku']) ? $_GET['sku'] : '';

if (empty($sku)) {
    echo json_encode(['error' => 'SKU no proporcionado']);
    exit();
}

// Consultar la base de datos para obtener los detalles del artículo
$query = $conn->prepare("SELECT * FROM articulos WHERE sku = ?");
$query->bind_param("s", $sku);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    $articulo = $result->fetch_assoc();
    echo json_encode($articulo);
} else {
    echo json_encode(['error' => 'Artículo no encontrado']);
}

$query->close();
$conn->close();
?>
