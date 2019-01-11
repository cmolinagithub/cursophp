<?php
//llamada al modelo
require_once("model/User_model.php");
$user=new User_model();
$total_user=$user->get_user_total();
require_once("model/pagination.php");

$arrayuser=$user->get_user($empezar_desde,$cant_registros);

//llamada a la vista
require_once("view/User_view.php");
//echo "fin del controlador";
?>