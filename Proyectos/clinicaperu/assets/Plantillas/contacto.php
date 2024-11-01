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
<section id="contacto">
    <div class="search-bar">
        <input type="text" placeholder="Buscar...">
    </div>
    <div class="pag5">
                <h2>Contacto</h2>
                <form id="form-agregar-articulo" method="POST" action="assets/php/submit_form.php">
                   <input type="hidden" name="usuario" value="<?php echo $user_name; ?>">
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre" onkeypress="return sololetras(event)" onpaste="return false" required>
                    <input type="text" name="correo" id="correo" placeholder="Ingrese su Correo" required>
                    <input type="text" name="celular" id="celular" placeholder="Ingrese su Celular" onkeypress="return solonumeros(event)" onpaste="return false" required>
                    <textarea name="mensaje" placeholder="Escriba su Mensaje" required></textarea>
                    <div class="g-recaptcha" id="captcha" data-sitekey="6Le4CikqAAAAAN5-0xm5PC2H79r9lhS6H9Zl1xBg" data-validate="required"></div>
                    <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto" onclick="validarCorreo(form.correo.value)">
                </form>
                
            </div>
</section>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@latest/dist/email.min.js"></script>