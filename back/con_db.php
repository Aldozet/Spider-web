<?php

$conex = new mysqli("localhost", "root", "", "handfood", "3306");
$conex->set_charset("utf8");

/*if (!$conex) {

        die("Error de conexión: " . mysqli_connect_error());
    } else {

        echo "Conexión exitosa";
    }*/
