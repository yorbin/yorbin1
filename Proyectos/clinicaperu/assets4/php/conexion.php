<?php
// Configuración de la base de datos
$host = 'localhost'; // El host donde se encuentra la base de datos
$usuario = 'root'; // El usuario de la base de datos
$contraseña = ''; // La contraseña del usuario
$nombre_base_datos = 'master'; // El nombre de la base de datos

// Establecer la conexión con la base de datos
$conexion = new mysqli($host, $usuario, $contraseña, $nombre_base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Si la conexión es exitosa, puedes hacer consultas a la base de datos
// Por ejemplo, para seleccionar todos los registros de una tabla llamada 'usuarios'
// $resultado = $conexion->query("SELECT * FROM usuarios");

// Recuerda cerrar la conexión cuando termines de usarla
// $conexion->close();
?>