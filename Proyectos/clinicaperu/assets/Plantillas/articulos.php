
<?php
session_start(); // Iniciar la sesión

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
<?php
require_once '../php/obtenerarticulos.php';
?>

<section id="articulos">
    <div class="search-bar">
        <input type="text" id="search-box" placeholder="Buscar Articulo...">
    </div>
    <h1>Articulos</h1>
    <div class="pag4">
        <div class="container-productos" id="lista-productos">
            <?php foreach ($articulos as $articulo): ?>
                <div class="card">
                    <img src="<?php echo $articulo['imagen']; ?>" class="card-img">
                    <br>
                    <h5><?php echo $articulo['titulo']; ?></h5>
                    <p>SKU: <?php echo $articulo['sku']; ?></p>
                    <p>Descripción: <?php echo $articulo['descrip']; ?></p>
                    <p>USD/ <small class="precio"><?php echo $articulo['precio']; ?></small></p>
                    <br>
                    <a href="#" class="button agregar-carrito" data-id="<?php echo $articulo['Id']; ?>">Agregar al Carrito</a>
                    <br><br>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
