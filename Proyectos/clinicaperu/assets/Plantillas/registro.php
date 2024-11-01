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
        function togglePasswordVisibility() {
            var passwordField1 = document.getElementById('clave');
            var passwordField2 = document.getElementById('clave2');
            var togglePasswordLabel = document.getElementById('toggle-password-label');
            if (passwordField1.type === 'password') {
                passwordField1.type = 'text';
                passwordField2.type = 'text';
                togglePasswordLabel.textContent = 'Ocultar Contraseñas';
            } else {
                passwordField1.type = 'password';
                passwordField2.type = 'password';
                togglePasswordLabel.textContent = 'Mostrar Contraseñas';
            }
        }

        function validateForm() {
            var clave = document.getElementById('clave').value;
            var clave2 = document.getElementById('clave2').value;
            if (clave !== clave2) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Las contraseñas no coinciden.',
                    timer: 3500,
                    showConfirmButton: false
                });
                return false;
            }
            return true;
        }
    </script>
    <script>
                    const iniciarSesionLink = document.getElementById('iniciarsesionlink');
            if (iniciarSesionLink) {
                console.log('iniciarSesionLink found:', iniciarSesionLink);
                iniciarSesionLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    console.log('iniciarSesionLink clicked');
                    loadSection('login');
                    localStorage.setItem('selectedSection', 'login');
                    location.reload();
                });
            } else {
                console.log('iniciarSesionLink not found');
            }

            if (document.querySelector('.g-recaptcha')) {
                if (typeof grecaptcha === 'undefined') {
                    const recaptchaScript = document.createElement('script');
                    recaptchaScript.src = 'https://www.google.com/recaptcha/api.js';
                    recaptchaScript.async = true;
                    recaptchaScript.defer = true;
                    document.body.appendChild(recaptchaScript);
                } else {
                    grecaptcha.render(document.querySelector('.g-recaptcha'), {
                        'sitekey': '6Le4CikqAAAAAN5-0xm5PC2H79r9lhS6H9Zl1xBg'
                    });
                }
            }
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<section id="registro" class="services">
                <div class="pag5">
                    <h2>Registrate</h2>
                    <form id="form-agregar-articulo" method="POST" action="assets/php/register.php" onsubmit="return validateForm()">
                        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre" required>
                        <input type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido" required>
                        <input type="text" name="usuario" id="usuario" placeholder="Ingrese un Usuario" required>
                        <input type="text" name="correo" id="correo" placeholder="Ingrese su Correo" required>
                        <input type="password" name="clave" id="clave" placeholder="Ingrese una Contraseña" required>
                        <input type="password" name="clave2" id="clave2" placeholder="Confirmar Contraseña" required>
                        <div class="chexcontra" style="width: 200px; justify-content: space-between; float: right;">
                            <div style="width: 50px; float: left;"><input type="checkbox" id="toggle-password" onclick="togglePasswordVisibility()"></div>
                            <div style="width: 150px; float: right;"><label for="toggle-password" id="toggle-password-label" style="color: black;">Mostrar Contraseñas</label></div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6Le4CikqAAAAAN5-0xm5PC2H79r9lhS6H9Zl1xBg"></div>
                        <input type="submit" id="button-register" value="Registrar" class="button-contacto">
                    </form>
                    <div style="text-align: center;"><p><a id="iniciarsesionlink" style="color: rgb(0, 0, 0); text-decoration: underline;">Iniciar Sesion</a></p></div>
                </div>
        </section>
