<?php
$recaptcha_secret = '6Le4CikqAAAAAIghZfHo7fqMsdVoijwJuYuddE8K'; // Reemplaza con tu clave secreta de reCAPTCHA

// Verificar reCAPTCHA
$recaptcha_response = $_POST['g-recaptcha-response'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
$response_keys = json_decode($response, true);

if(intval($response_keys["success"]) !== 1) {
    $message = "Por favor, completa el reCAPTCHA.";
    $alertType = "error";
    $redirectUrl = '../../index.php'; // Redirect to index.html
    $section = 'registro'; // Section to load on error
} else {
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $base_datos = "form_data";

    // Crear conexión
    $conn = new mysqli($servidor, $usuario, $clave, $base_datos);

    // Verificar conexión
    if ($conn->connect_error) {
        $message = "Conexión fallida: " . $conn->connect_error;
        $alertType = "error";
        $redirectUrl = '../../index.php'; // Redirect to index.html
        $section = 'registro'; // Section to load on error
    } else {
        // Obtener datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $priv_user = '1'; // Privilegio de usuario por defecto
        $f_registro = date('Y-m-d H:i:s'); // Fecha y hora actual

        // Verificar si el usuario ya existe
        $sql_check_usuario = "SELECT * FROM login_data WHERE usuario='$usuario'";
        $result_usuario = $conn->query($sql_check_usuario);

        if ($result_usuario->num_rows > 0) {
            $message = "El Usuario ya existe, Por favor intente con otro.";
            $alertType = "error";
            $redirectUrl = '../../index.php'; // Redirect to index.html
            $section = 'registro'; // Section to load on error
        } else {
            // Verificar si el correo ya existe
            $sql_check_correo = "SELECT * FROM login_data WHERE gmail='$correo'";
            $result_correo = $conn->query($sql_check_correo);

            if ($result_correo->num_rows > 0) {
                $message = "El Correo ya existe, Por favor intente con otro.";
                $alertType = "error";
                $redirectUrl = '../../index.php'; // Redirect to index.html
                $section = 'registro'; // Section to load on error
            } else {
                // Insertar datos en la base de datos
                $sql = "INSERT INTO login_data (nombre, apellido, usuario, clave, gmail, priv_user, f_registro) VALUES ('$nombre', '$apellido', '$usuario', '$clave', '$correo', '$priv_user', '$f_registro')";

                if ($conn->query($sql) === TRUE) {
                    $message = "Registrado Exitosamente";
                    $alertType = "success";
                    $redirectUrl = '../../index.php'; // Redirect to index.html
                    $section = 'login'; // Section to load on success
                } else {
                    $message = "Error: " . $sql . "<br>" . $conn->error;
                    $alertType = "error";
                    $redirectUrl = '../../index.php'; // Redirect to index.html
                    $section = 'registro'; // Section to load on error
                }
            }
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirigiendo...</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #21042c;
        }

        .stars, .fireworks {
            width: 100%;
            height: 100%;
            position: absolute;
            background: transparent;
            overflow: hidden;
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            border-radius: 50%;
            animation: twinkle 1.5s infinite ease-in-out;
        }

        @keyframes twinkle {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }

        .firework {
            position: absolute;
            width: 2px;
            height: 2px;
            background: transparent;
            border-radius: 50%;
            animation: explode 1s ease-out forwards;
        }

        @keyframes explode {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(50); opacity: 0; }
        }

        .content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<div class="stars" id="stars"></div>
    <div class="fireworks" id="fireworks"></div>
    <div class="content">
        <script>
            Swal.fire({
                icon: '<?php echo $alertType; ?>',
                title: '<?php echo $alertType === "success" ? "Enviado" : "Error"; ?>',
                text: '<?php echo $message; ?>',
                timer: 3500,
                showConfirmButton: false
            }).then(() => {
                localStorage.setItem('selectedSection', '<?php echo $section; ?>'); // Store section name in localStorage
                window.location.href = '<?php echo $redirectUrl; ?>';
            });

            // Create stars
            function createStars() {
                const starsContainer = document.getElementById('stars');
                const numStars = 100;
                for (let i = 0; i < numStars; i++) {
                    const star = document.createElement('div');
                    star.className = 'star';
                    star.style.top = `${Math.random() * 100}%`;
                    star.style.left = `${Math.random() * 100}%`;
                    star.style.animationDuration = `${Math.random() * 2 + 1}s`;
                    starsContainer.appendChild(star);
                }
            }

            // Create fireworks
            function createFireworks() {
                const fireworksContainer = document.getElementById('fireworks');
                const numFireworks = 10;
                for (let i = 0; i < numFireworks; i++) {
                    const firework = document.createElement('div');
                    firework.className = 'firework';
                    firework.style.top = `${Math.random() * 100}%`;
                    firework.style.left = `${Math.random() * 100}%`;
                    firework.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 50%)`;
                    firework.style.animationDelay = `${Math.random() * 2}s`;
                    fireworksContainer.appendChild(firework);
                }
            }

            // Determine which animation to show
            if ('<?php echo $alertType; ?>' === 'success') {
                createFireworks();
            } else {
                createStars();
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </div>
</body>
</html>