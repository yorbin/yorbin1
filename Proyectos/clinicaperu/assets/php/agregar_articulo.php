<?php
// archivo agregar_articulo.php

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si se ha subido la imagen correctamente
    if (isset($_FILES['imagen'])) {
        $imagen = $_FILES['imagen'];
        $imagen_nombre = $imagen['name'];
        $imagen_tipo = $imagen['type'];
        $imagen_tamano = $imagen['size'];
        $imagen_temp = $imagen['tmp_name'];

        // Verificar si el tipo de archivo es válido
        $tipos_permitidos = array('image/jpeg', 'image/png', 'image/gif');
        if (!in_array($imagen_tipo, $tipos_permitidos)) {
            $response = array('status' => 'error', 'message' => 'Tipo de archivo no permitido.');
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }

        // Verificar si el tamaño del archivo es válido
        $tamano_maximo = 1024 * 1024; // 1MB
        if ($imagen_tamano > $tamano_maximo) {
            $response = array('status' => 'error', 'message' => 'Tamaño del archivo demasiado grande.');
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }

        // Subir la imagen al servidor
        $ruta_destino = '../foto/' . $imagen_nombre;
        if (!move_uploaded_file($imagen_temp, $ruta_destino)) {
            $response = array('status' => 'error', 'message' => 'Error al subir la imagen.');
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }

        // Guardar la ruta relativa de la imagen
        $ruta_imagen = 'assets/foto/' . $imagen_nombre;

        // Procesar otros campos del formulario
        $titulo = $_POST['titulo'];
        $tipo = $_POST['tipo'];
        $seriales = $_POST['seriales'];
        $lote = $_POST['lote'];
        $modelo = $_POST['modelo'];
        $linea = $_POST['linea'];
        $sub_linea = $_POST['sub-linea'];
        $referencia = $_POST['referencias'];
        $descrip = $_POST['descrip'];
        $categoria = $_POST['categoria'];
        $color = $_POST['color'];
        $item = $_POST['item'];
        $peso = $_POST['peso'];
        $garantia = $_POST['garantia'];
        $piecubico = $_POST['piecubico'];
        $proveedor = $_POST['proveedor'];
        $procedencia = $_POST['procedencia'];
        $ubicacion = $_POST['ubicacion'];
        $iva = $_POST['iva'];
        $precio = $_POST['precio'];
        $ultimocosto = $_POST['ultimocosto'];
        $ultimprecio = $_POST['ultimprecio'];
        $primaria = $_POST['primaria'];
        $secundaria = $_POST['secundaria'];
        $uempaque = $_POST['uempaque'];
        $inactivo = $_POST['inactivo'];

        // Generar un SKU único
        $sku = uniqid();

        // Conectar a la base de datos
        require 'conexion.php';

        // Verificar si el SKU ya existe
        $sql = "SELECT sku FROM articulos WHERE sku = '$sku'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // El SKU ya existe, generar uno nuevo
            $sku = uniqid();
        }

        // Insertar datos en la base de datos
        $sql = "INSERT INTO articulos (sku, titulo, imagen, tipo, seriales, lote, modelo, linea, sub_linea, referencia, descrip, categoria, color, item, peso, garantia, piecubico, proveedor, procedencia, ubicacion, iva, precio, ultimocosto, ultimprecio, primaria, secundaria, uempaque, inactivo) VALUES ('$sku', '$titulo', '$ruta_imagen', '$tipo', '$seriales', '$lote', '$modelo', '$linea', '$sub_linea', '$referencia', '$descrip', '$categoria', '$color', '$item', '$peso', '$garantia', '$piecubico', '$proveedor', '$procedencia', '$ubicacion', '$iva', '$precio', '$ultimocosto', '$ultimprecio', '$primaria', '$secundaria', '$uempaque', '$inactivo')";
        if (mysqli_query($conn, $sql)) {
            $response = array('status' => 'success', 'message' => 'Artículo agregado correctamente.');
        } else {
            $response = array('status' => 'error', 'message' => 'Error al agregar artículo: ' . mysqli_error($conn));
        }
        mysqli_close($conn);
    } else {
        $response = array('status' => 'error', 'message' => 'Error al subir la imagen.');
    }
} else {
    // No se ha enviado el formulario
    $response = array('status' => 'error', 'message' => 'No se ha enviado el formulario.');
}

// Output HTML and JavaScript code to handle the response
?>
<html>
    <head>
        <title>Agregar Artículo</title>
    </head>
    <body>
        <div id="alert-container"></div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            var response = <?php echo json_encode($response); ?>;
            if (response.status == "success") {
                Swal.fire({
                    title: "Éxito",
                    text: response.message,
                    icon: "success",
                    confirmButtonText: "OK"
                }).then(function() {
                    window.location.href = "../../admin.php";
                });
            } else {
                Swal.fire({
                    title: "Error",
                    text: response.message,
                    icon: "error",
                    confirmButtonText: "OK"
                }).then(function() {
                    window.location.href = "../../admin.php";
                });
            }
        </script>
    </body>
</html>