


<!DOCTYPE html>
<html lang="es">
<?php include 'assets4/php/obtener_logo.php'; ?>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encabezado Moderno</title>
    <link rel="stylesheet" href="styles4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="contenedorprimario">
        <div class="refiereme"> 
    <table>
        <tr>
            <td><?php echo $v_cabecera4?></td>
            <td><?php echo $v_cabecera5?></td>
            <td><?php echo $v_cabecera6?></td>
            <td><?php echo $v_cabecera7?></td>
        </tr>
    </table>
</div></div>

</head>
<body>
    <header class="header">
        <div class="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <div class="logo">
            <div class="title-with-image">
            <?php  
            if (!empty($v_cabecera1)) {
                echo "<img src='{$v_cabecera1}' alt='Logo' id='logo-header' class='title-image'>";
            } else {
                echo "<!-- No se encontró el logo -->";
            }
            ?>
            </div>
        </div>
        <div class="theme-switcher">
            <i class="fas fa-moon"></i>
        </div>
        <div class="portal">
            <a href="Login.html">
            <i class="fas fa-user-circle"></i>
            <span>INICIAR SESION</span>
        </a>
        
    </div>
    

    </header>
 
    <div class="content">
        <div class="left-column">
            <div class="plan-info"><?php echo $v_cabecera3?></div>
            <div class="discover-info"><?php echo $v_Descipcion?></div>
            <div class="discover-info2"><?php echo $v_cabecera2?></div>
            <button class="login-btn">Inicia o Continua tu Aventura AQUI</button>
        </div>
        <div class="right-column">
            <img src="fotos/giflogo.gif" alt="Logo GIF" class="right-column-gif">
        </div>
    </div>
    <script src="script4.js"></script>
</body>
</html>


