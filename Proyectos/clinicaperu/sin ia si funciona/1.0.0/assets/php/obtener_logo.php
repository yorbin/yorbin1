<?php
require_once 'conexion.php';

// Función para obtener la ruta del logo
function obtenerRutaLogo($conexion) {
    $query = "SELECT logo FROM encabezado LIMIT 1";
    $resultado = $conexion->query($query);
    
    if ($resultado && $resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        return $fila['logo'];
    }
    
    return ''; // Retorna una cadena vacía si no se encuentra el logo
}

$rutaLogo = obtenerRutaLogo($conexion);

if (!empty($rutaLogo)) {
    echo "<img src='{$rutaLogo}' alt='Logo' id='logo-header' class='title-image'>";
} else {
    echo "<!-- No se encontró el logo -->";
}

// No cerramos la conexión aquí, ya que se manejará en conexion.php
?>
