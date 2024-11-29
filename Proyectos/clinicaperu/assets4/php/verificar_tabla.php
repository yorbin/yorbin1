<?php
require_once 'conexion.php';

$query = "DESCRIBE encabezado";
$resultado = $conexion->query($query);

if ($resultado) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "Columna: " . $fila['Field'] . " - Tipo: " . $fila['Type'] . "\n";
    }
} else {
    echo "Error al obtener la estructura de la tabla: " . $conexion->error;
}

$conexion->close();
?>
