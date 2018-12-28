<?php
//require "db/conexion.php";
$country_id=$_POST["country_id"];
$name=$_POST["name"];
$code=$_POST["code"];
echo "$country_id      $name     $code";
try{

    $base = new PDO('mysql:host=localhost; dbname=dbjstore','cmolina','19841984');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
echo "Conexion exitosa";
$sql="INSERT INTO `cj_zone`(`country_id`, `name`, `code`) VALUES (:z_country_id, :z_name, :z_code)";
$resultado = $base->prepare($sql);
$resultado->execute(array(":z_country_id"=>$country_id,
":z_name"=>$name, ":z_code"=>$code));
echo "Registro guardado";
$resultado->closeCursor();
}catch (Exception $e) {
    die('Error: ' . $e->getMessage()) ;
} finally {
    $this->$base = null;
}

?>