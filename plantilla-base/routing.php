<?php 
	/**
	* Archivo que redirecciona al contenido que se va incrustar dentro de la header y el footer
	* Autor: Elivar Largo
	* Sitio Web: wwww.ecodeup.com
	**/
	if ($_GET['menu']=='registrar') {
		require_once('Clientes/registrar.php');
	}if ($_GET['menu']=='mostrar') {
		require_once('Clientes/mostrar.php');
	} 
 ?>