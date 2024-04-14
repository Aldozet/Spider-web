<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Hand Food</title>
    <!--
    
TemplateMo 558 Klassy Cafe


-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.css">

    <link rel="stylesheet" href="./assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="./assets/css/owl-carousel.css">

    <link rel="stylesheet" href="./assets/css/lightbox.css">

</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img id="logo" src="assets/images/Logo_Hand_Food_2-removebg-preview (1).png" align="hand food">

                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.html" class="active">Inicio</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <main>

        <section class="FormSecion">
            <div class="container">
                    <form id="inicioSesion" name="inicioSesion" action="" method="post" enctype="multipart/form-data" autocomplete="on">

                        <img id="iconoUsuario" alt="iconoUsuario" src="./assets/images/iconoUsuario.jpg">

                        <p id="tituloinicioSecion">Iniciar sesión</p>

                        <?php
                        include("./back/con_db.php");
                        include("./back/login.php");

                        ?>

                        <label for="usuario"></label>
                        <input type="text" id="usuario" name="usuario" size="30" maxlength="30" placeholder="Usuario" required=""><br>

                        <label for="contraseñaUsuario"></label>
                        <input type="password" name="contraseñaUsuario" id="contraseñaUsuario" placeholder="contraseña" maxlength="25" size="30" required=""> <br>

                        <div id="botonSecion">
                            <input type="submit" value="Acceder" name="Enviar" id="botonenvio">
                        </div>
                    </form>
                </div>
        </section>

    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div>
                        <a href="index.html"><img id="logo_footer" src="assets/images/Logo_Hand_Food_2-removebg-preview (1).png" alt=""></a>

                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <br>© Copyright Hand Food.</br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>