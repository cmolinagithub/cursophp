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
echo("Cargar imagens");
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamanio_imagen=$_FILES['imagen']['size'];
$imagen_tmp=$_FILES['imagen']['tmp_name'];

echo("Datos:  nombre".$nombre_imagen." Tipo image ".$tipo_imagen." Tamanio ".$tamanio_imagen." tempor ".$imagen_tmp);
//como especificar en que carpeta donde se va a guradar
///var/www/html/cursophp/subirImagenes/imagenes
//ruta de las imagenes agregar 
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/cursophp/';
echo("</br> Document Root:  ".$_SERVER['DOCUMENT_ROOT']);
echo("</br> Carpeta destino:  ".$carpeta_destino);
//movemos la imagen del direcctorio temporal al directorio escogido
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino,$nombre_imagen);
?>