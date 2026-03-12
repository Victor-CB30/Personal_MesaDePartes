<?php
/* TODO: Incluye el archivo de configuracion de la conexion a la base de datos y la clase usuario */
    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");

    /* TODO: Crea una instancia de la clase Usuarios */
    $Usuario = new Usuario();

    /*     TODO: Utiliza una estructura SWITCH para determinar la operacion a realizar segun el valor $_GET["op"] */
    switch($_GET["op"]){
        /* TODO: Si la operacion es registrar */
        case "registrar":

            /* TODO: Llama al metodo registrar_usuario de la instancia $usuario con los datos del formulario */
            $usuario-> registrar_usuario($_Post["usu_nomape"],["usu_correo"],["usu_pass"]);

            break; 
    }


?>