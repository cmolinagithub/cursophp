<?php
//echo "Estamos en el controlador";
require_once("modelo/Zonas_modelo.php");
$zona=new Zonas_modelo();
$matrizzona=$zona->get_zonas();
require_once("vista/Zonas_view.php");
//echo "fin del controlador";
?>