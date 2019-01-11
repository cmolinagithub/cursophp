<?php
$cant_registros=3;
//opcion inicial pildoras informatica 
if(isset($_GET["pagina"])){
  if($_GET["pagina"]==1){
    header("Location:index.php"); 
  }else{
    $pagina=$_GET["pagina"];
  }

}else{
  //$_GET["pagina"]=1;
  $pagina=$_GET["pagina"]=1;
  
}
$empezar_desde=($pagina-1)*$cant_registros;
$total_paginas=ceil($total_user/$cant_registros);

?>