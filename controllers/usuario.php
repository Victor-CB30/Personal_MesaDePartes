<?php
/* TODO: Incluye el archivo de configuracion de la conexion a la base de datos y la clase usuario */
    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");

    /* TODO: Crea una instancia de la clase Usuarios */
    $usuario = new Usuario();

    /*     TODO: Utiliza una estructura SWITCH para determinar la operacion a realizar segun el valor $_GET["op"] */
    switch($_GET["op"]){
        /* TODO: Si la operacion es registrar */
        case "registrar":

            /* TODO: Llama al metodo registrar_usuario de la instancia $usuario con los datos del formulario */
            $usuario->registrar_usuario(
            $_POST["usu_nomape"],
            $_POST["usu_correo"],
            $_POST["usu_pass"]);

            break; 
    }


?>