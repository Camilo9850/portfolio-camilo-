<?php
$pagina = "sobre-mi";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
    <!-- Usa la CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main>
        <section id="bio" class="container">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h1 class="col-12 py-5">Sobre mí</h1>
                    <p>Apasionado por la tecnología y gestión de proyectos. Soy docente de cursos de programación Full
                        Stack y de Base de datos.</p>
                    <a href="contacto.html" class="btn btn-rojo my-5 d-none d-sm-block w-25">Enviar mensaje</a>
                </div>
                <div class="col-10 col-sm-3 py-5 pe-5 d-none d-sm-block">
                    <img src="imagenes/yo.jpg" alt="camilo" class="img-fluid">
                </div>
                <div class="col-6 d-sm-block d-sm-none py-3">
                    <img src="imagenes/yo.jpg" alt="camilo" class="img-fluid">
                </div>
                <div class="col-6 d-sm-block d-sm-none py-3">
                    <a href="contacto.html" class="btn btn-rojo my-5 d-sm-block d-sm-none">Enviar mensaje</a>
                </div>
            </div>
        </section>
        <section id="stack">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="py-5">Stack tecnológico</h2>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Javascript</h3>
                            <i class="fa-brands fa-js pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">PHP</h3>
                            <i class="fa-brands fa-php pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">HTML</h3>
                            <i class="fa-brands fa-html5 pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">API Rest</h3>
                            <i class="fa-solid fa-gears pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Laravel</h3>
                            <i class="fa-brands fa-laravel pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Bootstrap</h3>
                            <i class="fa-brands fa-bootstrap pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">MySQL</h3>
                            <i class="fa-solid fa-database pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">CSS</h3>
                            <i class="fa-brands fa-css3-alt pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Git</h3>
                            <i class="fa-brands fa-git pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">React.js</h3>
                            <i class="fa-brands fa-react pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Mercadopago</h3>
                            <i class="fa-solid fa-wallet pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Amazon AWS</h3>
                            <i class="fa-brands fa-aws pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Linux</h3>
                            <i class="fa-brands fa-linux pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Apache</h3>
                            <i class="fa-solid fa-server pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Paypal</h3>
                            <i class="fa-brands fa-paypal pb-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="pt-5 pb-4">Experiencia laboral</h2>
                </div>
            </div>
            <div class="row shadow">
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="imagenes/logo-depcsuite.svg" alt="DEPCSUITE" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    
                    <h4>DEPCSUITE SA</h4>
                    <h5>FUCK STACK</h5>
                    <p>Desarrollador con Laravel y php</p>
                </div>
               
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="imagenes/mikel.png" alt="Ente Nacional de Comunicaciones" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Desarrollador  Full Stack</h3>
                    <h4></h4>
                    <h5>jul 2012 - jun 2018</h5>
                    <p>Desarrollador Full Stack conocimiento en laravel php html css mvc </p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5 text-center">
                    <i class="fa-solid fa-landmark" alt="Certificado Digital SA"></i>
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Certificado Digital SA</h3>
                    <h4> Desarrollador</h4>
                    
                    <p>Proyecto de desarrollo de sistemas web para los clientes de la consultora. Tecnologías: PHP, CSS, HTML, jQuery,
                    Javascript, MySQL, WSDL.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5 text-center">
                    <i class="fa-solid fa-globe"  alt="Freelance"></i>
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Desarrollador Back-end y Front-end</h3>
                    <h4>Freelance</h4>
               
                    <p>Desarrollo, implementación y mantenimiento de sistemas y páginas Web. Relevamiento de requisitos. Trato con el cliente.
                    Desarrollo del Brief de marca y del sitio web. Participación en eventos de networking. Tecnologías: HTML, CSS,
                    Javasacript, jQuery, MySQL, AJAX, API, Facebook, API Twitter, y API Youtube, Drupal, Wordpress.</p>
                </div>
               
                
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Formación académica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                       <div class="col-sm-2 d-none d-sm-block p-9">
                    <img src="imagenes/uni.png" alt="Fundacion universitaria colombo germana" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Fundacion universitaria colombo germana</h3>
                    <h4>Universidad colombia</h4>
                    <h5>Graduado desde 2023</h5>
                    <p>Tecnologo en sistema informatico</p>
                </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/sena.png" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>TECNICO PROGRAMACION DE SOFTWARE</h3>
                            <h4>sena</h4>
                      
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        
                       
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="formacion" class="container mb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="imagenes/logo-depcsuite.svg" alt="DEPCSUITE" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 py-12">
                    
                    <h4>DEPCSUITE SA</h4>
                    <h5>FUCK STACK</h5>
                    <p>Desarrollador con Laravel y php</p>
                </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="imagenes/images.png" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>DIPLOMADO EN REDES Y SERVIDORES</h3>
                            
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                       
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    
                </div>
             
             
            </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Intermediate B2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Tenis</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion">

        </section>
        <section id="cursos">

        </section>
    </main>
    <footer class="container mt-auto py-4">
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="https://github.com"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-12">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-sm-3 col-12">
                <a href="mailto:info@nelsontarche.com.ar">info@nelsontarche.com.ar</a>
            </div>
        </div>
       <a href="https://api.whatsapp.com/send?phone=573219264943" target="_blank">
    <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i>
</a>
</body>

</html>