<?php
require_once '../php/conexion.php';
// Obtener artículos de la base de datos
$sql = "SELECT * FROM articulos";
$result = $conn->query($sql);
$articulos = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $articulos[] = $row;
    }
}

?>