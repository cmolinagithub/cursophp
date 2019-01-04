<?php
//llamada al modelo
require_once("model/User_model.php");
$user=new User_model();
$arrayuser=$user->get_user();
//llamada a la vista
require_once("view/User_view.php");
//echo "fin del controlador";
?>