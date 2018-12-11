<?php
require "db/conexion.php";
$country_id=$_POST["country_id"];
$name=$_POST["name"];
$code=$_POST["code"];

class ProcesarIngresarZona extends Conexion{

    public function ProcesarIngresarZona() {
        parent::Conexion();
    }
    

}

?>