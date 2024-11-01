<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['user_id'])) {
    // Incluir el script de SweetAlert2 en el <head>
    echo "
    <!DOCTYPE html>
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
                title: 'Error',
                text: 'Ya hay una cuenta iniciada.',
                timer: 3500,
                showConfirmButton: false
            }).then(() => {
                    loadSection('inicio');
                    localStorage.setItem('selectedSection', 'inicio');
                    location.reload();
            });
        </script>
    </body>
    </html>";
    exit();
}
?>

<head>

    <script>
                    const iniciarSesionLink = document.getElementById('iniciarsesionlink');
            if (iniciarSesionLink) {
                console.log('iniciarSesionLink found:', iniciarSesionLink);
                iniciarSesionLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    console.log('iniciarSesionLink clicked');
                    loadSection('registro');
                    localStorage.setItem('selectedSection', 'registro');
                    location.reload();
                });
            } else {
                console.log('iniciarSesionLink not found');
            }

    </script>
        <script>
        function togglePasswordVisibility() {
            var passwordField1 = document.getElementById('clave');
            var togglePasswordLabel = document.getElementById('toggle-password-label');
            if (passwordField1.type === 'password') {
                passwordField1.type = 'text';
                togglePasswordLabel.textContent = 'Ocultar Contraseñas';
            } else {
                passwordField1.type = 'password';
                togglePasswordLabel.textContent = 'Mostrar Contraseñas';
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<section id="login" class="services">
                <div class="pag5">
                    <h2>Iniciar Sesión</h2>
                    <form id="form-agregar-articulo" method="POST" action="assets/php/login.php" onsubmit="return validateForm()">
                    <input type="text" name="correo" id="correo" placeholder="Ingrese su Correo o Usuario" required>
                    <input type="password" name="clave" id="clave" placeholder="Ingrese su Contraseña" required>
                    <div style="width: 200px; justify-content: space-between; float: right;">
                        <div style="width: 50px; float: left;"><input  type="checkbox" id="toggle-password" onclick="togglePasswordVisibility()"></div>
                        <div style="width: 150px; float: right;""><label for="toggle-password" id="toggle-password-label" style="color: black;">Mostrar Contraseñas</label></div>
                    </div>
                    <input type="submit" id="button-login" value="Iniciar Sesión" class="button-contacto">
                    </form>
                    <div style="text-align: center;"><p><a id="iniciarsesionlink" style="color: rgb(0, 0, 0); text-decoration: underline;">Registrate</a></p></div>
                </div>
</section>
