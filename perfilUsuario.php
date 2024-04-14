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
            </div>
        </section>
        <section class="FormSecion">
            <div class="container">
                <form id="registroDonacion" name="registroDonacion" action="" method="post" enctype="multipart/form-data" autocomplete="on">

                    <p id="registroDonacion">Nueva donacion</p>

                    <?php
                    include("./back/con_db.php");
                    ?>

                    <label for="nombre"></label>
                    <input type="text" id="nombre" name="nombre" size="30" maxlength="50" placeholder="Nombre o Asociacion" required=""><br>

                    <label for="correoElectronico"></label>
                    <input type="email" id="correoElectronico" name="correoElectronico" size="30" placeholder="Correo electronico" list="listaformatos" required="">
                    <datalist>
                        <option>.com</option>
                        <option>.mx</option>
                        <option>.com.mx</option>
                        <option>.org</option>
                    </datalist><br>

                    <label for="numeroCelular"></label>
                    <input type="tel" id="numeroCelular" name="numeroCelular" size="30" maxlength="10" placeholder="Numero Celular">
                    <br>

                    <label for="titulo"></label>
                    <input type="text" id="titulo" name="titulo" size="30" maxlength="50" placeholder="Titulo">
                    <br>

                    <label for="descripcion"></label>
                    <textarea type="text" id="descripcion" name="descripcion" rows="4" cols="34" maxlength="250" placeholder="Descripcion del producto"></textarea>
                    <br>

                    <label for="diaHora">Selecciona una fecha y hora:</label>
                    <input type="datetime-local" id="diaHora" name="diaHora">

                    <label for="estadoProcedencia"></label>
                    <input type="text" id="estadoProcedencia" name="estadoProcedencia" size="30" maxlength="50" placeholder="Estado de procedencia">

                    <label for="estadoProducto"> Estado del producto</label>
                    <select id="estadoProducto" name="estadoProducto" required="">
                        <option value="Verde">Verde</option>
                        <option value="Maduro">Maduro</option>
                        <optioSn value="Pasado">Pasado</optioSn>
                    </select><br>

                    <label for="tiempoVida"></label>
                    <input type="number" id="tiempoVida" name="tiempoVida" size="30" maxlength="2" placeholder="Dias para no ser consumible">

                    <div id="botonSecion">
                        <input type="submit" value="Acceder" name="Subir" id="botonenvio">
                    </div>
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