<?php
//Recibiendo los datos de la archivo
//almaecena datos/ propidades como: 
/*nombre   name
tipo        type
tamanio     size
tmp_name    tmp_name almacena directorio temporal
error       almacen un log o codigo de erro si no sube la archivo
 */
//$_FILES
//echo("Subiendo imagenes");
$nombre_archivo = $_FILES['archivo']['name'];
$tipo_archivo = $_FILES['archivo']['type'];
$tamanio_archivo = $_FILES['archivo']['size'];
$archivo_tmp = $_FILES['archivo']['tmp_name'];
$document_root = $_SERVER['DOCUMENT_ROOT'];
$error=$_FILES['archivo']['error'];
$carpeta_destino = "/cursophp/archivos_BBDD/archivos/";
$ruta_archivo="/var/www/html/cursophp/archivos_BBDD/archivos/";
echo('Nombre archivo: '.$nombre_archivo.'</br>');
echo('Tipo archivo: '.$tipo_archivo.'</br>');
echo('Tamanio archivo: '.$tamanio_archivo.'</br>');
echo('Imagen tmp: '.$archivo_tmp.'</br>');
echo('Document root: '.$document_root.'</br>');
echo('Erro archivo: '.$error.'</br>');
echo('Ruta archivo: '.$ruta_archivo.'</br>');

if ($tamanio_archivo <= 1500000) {
   move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_archivo. $nombre_archivo);
   chmod($ruta_archivo.$nombre_archivo, 0777);
   echo("Imagen fue cargada correctamente");
   //header("Location:index.php");

} else {
   echo ("Alerta:  el tamanio de la archivo supera el permitido");
}

 require "datos_conexion.php";
 $conexion=mysqli_connect($db_host,$db_user,$db_pass);
 if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
   }
    mysqli_select_db($conexion,$db_base) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8");

    
    $filename=$ruta_archivo.$nombre_archivo; //ojo muy imprtante
    $archivo_objetivo = fopen($filename,"rb") or die("</br> No se puede abrir archivo");
    echo "</br>archivos/".$nombre_archivo;
    //$contenido=fread($archivo_objetivo,$tamanio_archivo);
    $contenido=fread($archivo_objetivo,filesize($filename)) or die("</br> No se puede leer archivo");;
    //$contenido=addslashes(base64_encode($contenido));// esta es otra opcion
    $contenido=addslashes($contenido);
    //echo("</br>Tamanio del archivo es ........El contenido es el siguiente:  ".$contenido);
    fclose($archivo_objetivo);

    $sql='INSERT INTO cj_archivos(nombre, tipo,contenido) values 
    ("'.$nombre_archivo.'","'.$tipo_archivo.'","'.$contenido.'");';
    $resultado=mysqli_query($conexion,$sql);
    //echo "</br>Actualizacion: ".$sql;
    if(mysqli_affected_rows($conexion)>0){
       echo "</br>Registro guardado</br>";
    }else echo "El registro no esta guardado";

 

?>