<?php
require_once 'conexion.php';

/* // Función para obtener la ruta del logo
function obtenerRutaLogo($conexion) {
    $query = "SELECT cabecera1 FROM presentacion LIMIT 1";
    $resultado = $conexion->query($query);
    
    if ($resultado && $resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        return $fila['cabecera1'];
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
 */
$sql = "SELECT * FROM presentacion";
$result = $conexion->query($sql);

// Crear un array asociativo para almacenar los resultados
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Crear variables con el prefijo "v_"
        foreach ($row as $key => $value) {
            $variableName = "v_" . $key;
            $$variableName = $value;
        }
    }
} else {
    echo "0 results";
}

// Cerrar la conexión
$conexion->close();

?>
