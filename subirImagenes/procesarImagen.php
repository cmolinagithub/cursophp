<?php
//Recibiendo los datos de la imagen
//almaecena datos/ propidades como: 
/*nombre   name
tipo        type
tamanio     size
tmp_name    tmp_name almacena directorio temporal
error       almacen un log o codigo de erro si no sube la imagen
 */
//$_FILES
//echo("Subiendo imagenes");
$nombre_imagen = $_FILES['imagen']['name'];
$tipo_imagen = $_FILES['imagen']['type'];
$tamanio_imagen = $_FILES['imagen']['size'];
$imagen_tmp = $_FILES['imagen']['tmp_name'];
$document_root = $_SERVER['DOCUMENT_ROOT'];
$error=$_FILES['imagen']['error'];
$carpeta_destino = "/cursophp/subirImagenes/imagenes/";
$ruta_imagen=$document_root.$carpeta_destino;
echo('Nombre imagen: '.$nombre_imagen.'</br>');
echo('Tipo imagen: '.$tipo_imagen.'</br>');
echo('Tamanio imagen: '.$tamanio_imagen.'</br>');
echo('Imagen tmp: '.$imagen_tmp.'</br>');
echo('Document root: '.$document_root.'</br>');
echo('Erro imagen: '.$error.'</br>');

if ($tamanio_imagen <= 1500000) {
   if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif")
   {
   
   
//movemos la imagen del direcctorio temporal al directorio escogido
   move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_imagen. $nombre_imagen);
   chmod($_SERVER['DOCUMENT_ROOT'] . $carpeta_destino . $nombre_imagen, 0777);
   echo("Imagen fue cargada correctamente");
   //header("Location:index.php");
   }else{
      echo "El formato de la imagen no es permitido</br>";
   }
} else {
   echo ("Alerta:  el tamanio de la imagen supera el permitido");
}

//ojo otro ejemplo de subir imagenes.

/*
if (move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen)){
   chmod($carpeta_destino.$nombre_imagen,0777);
       echo "El archivo ha sido cargado correctamente.";
    }else{
       echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
    }

 */

 require "datos_conexion.php";
 $conexion=mysqli_connect($db_host,$db_user,$db_pass);
 if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
   }
    mysqli_select_db($conexion,$db_base) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8");
    $sql="UPDATE cj_user SET image='".$nombre_imagen."' where user_id=1;";
    $resultado=mysqli_query($conexion,$sql);
    echo "</br>Actualizacion: ".$sql;

 

?>