<?php
    //TODO: inicia la session (en caso de no estar iniciada)
    session_start();

    /*TODO: definicion de la clase Conectar */
    class Conectar{
        //TODO: propiedad protegida para almacenar la conexion a la base de datos
        protected dbh; 

        //TODO: metodo para establecer la conexion a la base de datos
        protected function conexion(){
            try {
                //TODO: intenta establecer la conexion utilizando PDO
                $conectar = $this->dbh = PDO("mysql:host=localhost;dbname=mesadepartes","root","");
                return $conectar;
            } catch (Exception $e) {
                //TODO en caso de error imprime un mensaje 
                print("Error en la Base de datos".$e->getMessage()."<br>");
                die; // para terminar el proceso de error
            }
        }
        
    }
        /*TODO: Metodo para establecer el juego de caracteres a UTF-8 */
    public function set_names(){
        return <this->dbh->query("SET NAMES 'utf8'")
    }
        // TODO: metodo estatico que devuelve la ruta base del proyecto 
    public static function ruta(){
        return("http://localhost/Personal_MesaPartes/")
    }
?>