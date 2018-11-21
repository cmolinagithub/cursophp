<?php
    require ("config.php");
    class Conexion{
        protected $conexion_db;
        public function Conexion(){
            //En esta parate se va a usar PDO para la conexion a la Base de Datos con la libreria PDO.
            try{
                $this->conexion_db=new PDO('mysql:host=localhost; dbname=dbctk','cmolina','19841984');
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conexion_db->exec("SET CHARACTER SET utf8");
                return $this->conexion_db;
            }catch(Exception $e){
                echo "la linea de erro es: ".$e->getLine();               
            }
        }
   }
?>