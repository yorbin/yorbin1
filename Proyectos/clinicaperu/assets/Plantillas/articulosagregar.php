<?php
session_start(); // Iniciar la sesión
require_once '../php/permisos3.php';
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
    <h1>Agregar Artículo</h1>
    <div class="pag5">
    <form id="form-agregar-articulo" method="POST" action="assets/php/agregar_articulo.php" enctype="multipart/form-data">
        <label for="titulo">Título del Artículo:</label>
        <input type="text" name="titulo" id="titulo" placeholder="Título del Artículo" required>

        <label for="tipo">Tipo:</label>
            <select id="tipo" name="tipo" required>
                <option value="nuevo">Nuevo</option>
                <option value="usado">Usado</option>
                <option value="reacondicionado">Reacondicionado</option>
            </select>

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <optgroup label="Electrónica">
                    <option value="telefonos">Teléfonos</option>
                    <option value="computadoras">Computadoras</option>
                    <option value="televisores">Televisores</option>
                    <option value="accesorios">Accesorios</option>
                </optgroup>
                <optgroup label="Ropa y Accesorios">
                    <option value="ropa_hombres">Ropa para hombres</option>
                    <option value="ropa_mujeres">Ropa para mujeres</option>
                    <option value="ropa_ninos">Ropa para niños</option>
                    <option value="zapatos">Zapatos</option>
                    <option value="bolsos">Bolsos</option>
                </optgroup>
                <optgroup label="Hogar y Cocina">
                    <option value="muebles">Muebles</option>
                    <option value="electrodomesticos">Electrodomésticos</option>
                    <option value="utensilios_cocina">Utensilios de cocina</option>
                    <option value="decoracion">Decoración</option>
                </optgroup>
                <optgroup label="Alimentos y Bebidas">
                    <option value="comida_enlatada">Comida enlatada</option>
                    <option value="bebidas">Bebidas</option>
                    <option value="snacks">Snacks</option>
                    <option value="productos_frescos">Productos frescos</option>
                </optgroup>
                <optgroup label="Salud y Belleza">
                    <option value="cuidado_personal">Cuidado personal</option>
                    <option value="maquillaje">Maquillaje</option>
                    <option value="suplementos">Suplementos</option>
                    <option value="equipos_ejercicio">Equipos de ejercicio</option>
                </optgroup>
                <optgroup label="Libros y Papelería">
                    <option value="libros">Libros</option>
                    <option value="cuadernos">Cuadernos</option>
                    <option value="material_oficina">Material de oficina</option>
                    <option value="articulos_arte">Artículos de arte</option>
                </optgroup>
                <optgroup label="Juguetes y Juegos">
                    <option value="juguetes">Juguetes</option>
                    <option value="juegos_mesa">Juegos de mesa</option>
                    <option value="videojuegos">Videojuegos</option>
                    <option value="puzzles">Puzzles</option>
                </optgroup>
                <optgroup label="Automotriz">
                    <option value="accesorios_autos">Accesorios para autos</option>
                    <option value="herramientas">Herramientas</option>
                    <option value="repuestos">Repuestos</option>
                </optgroup>
            </select>

            <label for="color">Color:</label>
            <select id="color" name="color" required>
                <option value="rojo">Rojo</option>
                <option value="azul">Azul</option>
                <option value="verde">Verde</option>
                <option value="amarillo">Amarillo</option>
                <option value="negro">Negro</option>
                <option value="blanco">Blanco</option>
                <option value="gris">Gris</option>
                <option value="rosa">Rosa</option>
                <option value="morado">Morado</option>
                <option value="naranja">Naranja</option>
                <option value="marron">Marrón</option>
                <option value="beige">Beige</option>
                <option value="turquesa">Turquesa</option>
                <option value="lila">Lila</option>
                <option value="dorado">Dorado</option>
                <option value="plateado">Plateado</option>
            </select>

            <label for="seriales">Seriales:</label>
            <input type="text" name="seriales" id="seriales" placeholder="Seriales" required>

            <label for="lote">Lote:</label>
            <input type="text" name="lote" id="lote" placeholder="Lote" required>

            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" id="modelo" placeholder="Modelo" required>

            <label for="linea">Línea:</label>
            <input type="text" name="linea" id="linea" placeholder="Línea" required>

            <label for="sub-linea">Sub-Línea:</label>
            <input type="text" name="sub-linea" id="sub-linea" placeholder="sub-linea" required>

            <label for="referencias">Referencias:</label>
            <input type="text" name="referencias" id="referencias" placeholder="Referencias" required>

            <label for="descrip">Descripción:</label>
            <input type="text" name="descrip" id="descrip" placeholder="Descripción" required>

            <label for="item">Item:</label>
            <input type="text" name="item" id="item" placeholder="Item" required>

            <label for="peso">Peso (kg):</label>
            <input type="number" name="peso" id="peso" placeholder="Peso" step="0.01" required>

            <label for="garantia">Garantía (meses):</label>
            <input type="number" name="garantia" id="garantia" placeholder="Garantía" required>

            <label for="piecubico">Pie Cúbico (m³):</label>
            <input type="number" name="piecubico" id="piecubico" placeholder="Pie Cúbico" step="0.01" required>

            <label for="proveedor">Proveedor:</label>
            <input type="text" name="proveedor" id="proveedor" placeholder="Proveedor" required>

            <label for="procedencia">Procedencia:</label>
            <input type="text" name="procedencia" id="procedencia" placeholder="Procedencia" required>

            <label for="ubicacion">Ubicación:</label>
            <input type="text" name="ubicacion" id="ubicacion" placeholder="Ubicación" required>

            <label for="iva">IVA (%):</label>
            <input type="number" name="iva" id="iva" placeholder="IVA" step="0.01" required>

            <label for="ultimocosto">Último Costo:</label>
            <input type="number" name="ultimocosto" id="ultimocosto" placeholder="Último Costo" step="0.01" required>

            <label for="ultimprecio">Último Precio:</label>
            <input type="number" name="ultimprecio" id="ultimprecio" placeholder="Último Precio" step="0.01" required>

            <label for="primaria">Primaria:</label>
            <input type="text" name="primaria" id="primaria" placeholder="Primaria" required>

            <label for="secundaria">Secundaria:</label>
            <input type="text" name="secundaria" id="secundaria" placeholder="Secundaria" required>

            <label for="uempaque">Unidad de Empaque:</label>
            <input type="text" name="uempaque" id="uempaque" placeholder="Unidad de Empaque" required>

            <label for="inactivo">Inactivo:</label>
            <select id="inactivo" name="inactivo" required>
                <option value="no">No</option>
                <option value="si">Sí</option>
            </select>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" placeholder="Precio" step="0.01" required>
        <input style="color:black;" type="file" name="imagen" id="imagen" accept="image/*" required>
        <input type="submit" id="button-agregar" value="Agregar Artículo" class="button-contacto">
    </form>
    </div>
</section>
<?php endif; ?>