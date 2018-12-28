<?php
    require ("config.php");
      
   
            //En esta parate se va a usar PDO para la conexion a la Base de Datos con la libreria PDO.
            try{
                $conexion_db = new PDO('mysql:host=localhost; dbname=dbjstore','cmolina','19841984');
                //$this->conexion_db=new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NOMBRE.','.DB_USUARIO.','.DB_CONTRA."'");
                $conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion_db->exec("SET CHARACTER SET utf8");
                echo "Conexio es exitosa";
                }catch(Exception $e){
                echo "la linea de erro es: ".$e->getLine();
                }
                finally {
                    $base=null;
                }
?>