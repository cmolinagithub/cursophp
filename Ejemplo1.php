<?php
include 'vehiculos.php';

$mazda=new Coche();
$pegaso= new Camion();
//$mazda->ruedas=9;
/*
echo "El mazda tiene ".$mazda->ruedas ." ruedas </br>";
echo  "El pegaso tiene ".$pegaso->ruedas ." ruedas </br>";
$pegaso->establce_color("Verde", "Hino");
$pegaso->arrancar();
*/
echo "El mazda tiene: ".$mazda->get_ruedas()." ruedas</br>";
echo "El camion tiene: ".$pegaso->get_ruedas()." ruedas</br>";

echo "----------Motores coches y camiones --------</br>";

echo "El mazda tiene un motor de: ".$mazda->get_motor()." cc</br>";
echo "El camion tiene un motor de: ".$pegaso->get_motor()." cc</br>";

?>

