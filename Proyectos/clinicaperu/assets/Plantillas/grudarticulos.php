<?php
session_start(); // Iniciar la sesión
require_once '../php/permisos3.php';
require_once '../php/conexion.php'; 
// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    // Incluir el script de SweetAlert2 en el <head>
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Redirigiendo...</title>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Por favor inicia sesión',
                text: 'Para poder ingresar, por favor inicia sesión.',
                timer: 3500,
                showConfirmButton: false
            }).then(() => {
                     loadSection('login');
                    localStorage.setItem('selectedSection', 'login');
                    location.reload();
            });
        </script>
    </body>
    </html>";
    exit();
  }
  $is_logged_in = isset($_SESSION['user_id']);

// Aquí puedes usar la información del usuario almacenada en la sesión
$user_name = $_SESSION['user_name'];
?>
<?php if ($_SESSION['priv_user'] >= 3): ?>
<section id="articulosagregar">
    <h1>Artículo</h1>
    <div class="pag7">
    <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Buscar artículos...">
    <table id="articulosTable">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Título</th>
                <th>SKU</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Consultar la base de datos para obtener los artículos
            $search = isset($_GET['search']) ? $_GET['search'] : '';
            $query = $conn->prepare("SELECT * FROM articulos WHERE titulo LIKE ? OR sku LIKE ? OR descrip LIKE ?");
            $search_param = "%$search%";
            $query->bind_param("sss", $search_param, $search_param, $search_param);
            $query->execute();
            $result = $query->get_result();

            while ($articulo = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><img src='{$articulo['imagen']}' class='card-img'></td>";
                echo "<td>{$articulo['titulo']}</td>";
                echo "<td>{$articulo['sku']}</td>";
                echo "<td>{$articulo['descrip']}</td>";
                echo "<td>USD/ <small class='precio'>{$articulo['precio']}</small></td>";
                echo "<td><a href='editar.php?id={$articulo['Id']}' class='button'>Editar</a></td>";
                echo "<td><a href='eliminar.php?id={$articulo['Id']}' class='button eliminar'>Eliminar</a></td>";
                echo "</tr>";
            }

            $query->close();
            $conn->close();
            ?>
        </tbody>
    </table>
    </div>
</section>
<style>
    .pag7{
        width: 100%;
        max-width: 800; 
        overflow-x: auto;
        max-height: 300px;
        overflow-y: auto;
        background: #ded0fa;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.377);
        min-height: 200px;
        padding: 3px;
        text-align: center;
        overflow: auto; /* Agrega una barra de desplazamiento cuando el contenido sobrepasa el ancho */
        display: flex; /* Establece el contenedor como un contenedor flexbox */
        flex-direction: column; /* Establece la dirección del contenido en columna */
        align-items: center; /* Alinea el contenido en el centro */
    }
    .pag7::-webkit-scrollbar {
     width: 5px; /* Establece el ancho de la barra de desplazamiento */
     height: 5px; /* Establece la altura de la barra de desplazamiento */
     border-radius: 10px; /* Agrega una esquina redondeada a la barra de desplazamiento */
     background-color: #cdb5fc; /* Establece el color de fondo de la barra de desplazamiento */
    }

    .pag7::-webkit-scrollbar-thumb {
     background-color: #270733; /* Establece el color de fondo del pulgar de la barra de desplazamiento */
     border-radius: 10px; /* Agrega una esquina redondeada al pulgar de la barra de desplazamiento */
    } 
    .pag7::-webkit-scrollbar-thumb:hover {
     background-color: #3d0a50;
    } 
    #articulosTable {
        border-collapse: collapse;
        animation: fadeIn 1s ease-in-out;
        flex: 1; /* Establece la tabla como un elemento flexbox */
        overflow: auto; /* Agrega una barra de desplazamiento cuando el contenido sobrepasa el ancho */
        width: 100%; /* Establece el ancho de la tabla en 100% del contenedor */
      
    }
    #articulosTable th, #articulosTable td {
        width: auto; /* Establece el ancho de las columnas en auto */
        max-width: 200px; /* Establece un ancho máximo para las columnas */
        overflow: hidden; /* Oculta el contenido que sobrepasa el ancho máximo */
        text-overflow: ellipsis; /* Agrega puntos suspensivos al final del contenido */
    }
    #articulosTable th {
        background-color: #2E0854; /* Dark purple color */
        color: white;
        padding: 12px;
        text-align: left;
    }
    #articulosTable td {
        border: 1px solid #ddd;
        padding: 8px;
        background-color: #f9f9f9; /* Pastel color */
    }
    #articulosTable th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #270733;
        color: white;
    }
    #searchInput {
        width: 100%;
        padding: 12px 20px;
        margin-bottom: 12px;
        box-sizing: border-box;
    }
    .card-img {
        width: 50px;
        height: auto;
    }
    .button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .button.eliminar {
        background-color: #FF0000; /* Red color for Eliminar button */
    }
</style>
<script>
    function searchTable() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("articulosTable");
        tr = table.getElementsByTagName("tr");
        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "none";
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        break;
                    }
                }
            }
        }
    }
</script>
</section>
<?php endif; ?>
