<?php 
  /*   TODO: Definicion de la clase usuarios que extiende la clase COnectar  */
    class Usuario extends Conectar{

       /*  TODO: Metoo para registrar un nuevo usuario en la base de datos  */
        public function registrar usuario($usu_nomape, $usu_correo, $usu_pass){
           /*  TODO: Obtener la conexion a la base de datos utilizando el metodo de la clase padre */
            $conectar = parent::conexion();
         /*    TODO: Establece el juego de caracteres a UTF-8 utilizando el metodo de la clase padre  */
            parent::set_names();
           /*  TODO: COnsulta SQL para insertar un nuevo usuario en la tabla tm_usuario */
            $sql ="INSERT INTO tm_usuario 
            (usu_nomape, usu_correo,usu_pass)
            VALUES 
            (?,?,?)";
            /* TODO: Preparar la consulta sql */
            $sql = $conectar->prepare($sql); 
            /* TODO: vincular los valores a los parametros de la consulta */
            $sql->bindValue(1, $usu_nomape);
            $sql->bindValue(2, $usu_correo);
            $sql->bindValue(2, $usu_pass);
            /* TODO: Ejecutar la consulta SQL */
            $sql->execute();
        }
    }

?>