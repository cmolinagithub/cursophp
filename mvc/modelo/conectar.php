<?php
class Conectar{
    public static function conexion(){
        try{
            $conexion = new PDO('mysql:host=localhost; dbname=dbjstore','cmolina','19841984');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
            //echo"Conexion correcta".$conexion;

            $consulta=$conexion->query("SELECT * FROM cj_zone");
            while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
            //echo ("</br>" .$fila["name"]);
            
        }



            
        }catch(Exception $e){
            die("Error ". $e->getMessage());
            echo "Linea del error ".$e->getLine();
        }
        return $conexion;
    }
}
?>