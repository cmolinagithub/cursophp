<?php
    require ("config.php");
      
    class Conexion{
        public $conexion_db;     
        public function Conexion(){
            //En esta parate se va a usar PDO para la conexion a la Base de Datos con la libreria PDO.
            try{
                $this->conexion_db=new PDO('mysql:host=localhost; dbname=dbjstore','cmolina','19841984');
                //$this->conexion_db=new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NOMBRE.','.DB_USUARIO.','.DB_CONTRA."'");
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conexion_db->exec("SET CHARACTER SET utf8");
                echo "Conexio es exitosa";
                return $this->conexion_db;
            }catch(Exception $e){
                echo "la linea de erro es: ".$e->getLine();
            }    
        }
    }
?>