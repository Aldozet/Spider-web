<?php

session_start();

if (!empty($_POST["Enviar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["contraseñaUsuario"])) {
        echo '<div class="alerta">Uno o mas campos estan vacios</div>';
    } else {
        $nombreUsuario = trim($_POST["usuario"]);
        $password = trim($_POST["contraseñaUsuario"]);
        $sql = $conex->query("SELECT `user`, `contrasena` FROM `usuarios` WHERE `user` = '$nombreUsuario' AND `contrasena` = '$password'");

        if ($datos = $sql->fetch_object()) {
            $_SESSION['nombreUsuario'] = $nombreUsuario;
            header("location: perfilUsuario.php");
        } else {
            echo '<div class="alerta">Acceso denegado</div>';
        }
    }
}

?>