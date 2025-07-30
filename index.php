<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "config.php";
$pagina = "inicio";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
    <!-- Usa la CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php";?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <!-- Verifica que la imagen exista en la ruta correcta: images/cohete.svg -->
                <a href="proyecto.php"><img src="imagenes/cohete.svg" alt="Cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center mb-3 offset-sm-3">
                <p class="py-1">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyecto.php" class="btn btn-blanco">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <footer class="container mt-auto py-4">
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="<?php echo $github_link; ?>"><i class="fa-brands fa-github"></i></a>
                <a href="<?php echo $linkedin_link; ?>"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-12">
                Sponsor <a href="<?php echo $sponsor_link; ?>"><?php echo $sponsor; ?></a>
            </div>
            <div class="col-sm-3 col-12">
                <a href="mailto:<?php echo $contacto_email; ?>"><?php echo $contacto_email; ?></a>
            </div>
        </div>
        <a href="https://api.whatsapp.com/send?phone=573219264943" target="_blank">
            <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i>
        </a>
    </footer>
</body>
</html>