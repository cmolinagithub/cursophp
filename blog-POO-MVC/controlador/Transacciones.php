<?php
include_once("../modelo/Objeto_Blog.php");
include_once("../modelo/Manejo_Objetos.php");
try {
    $miconexion = new PDO('mysql:host=localhost; dbname=dbblog', 'cmolina', '19841984');
    $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_FILES['imagen']['error']) {
        switch ($_FILES['imagen']['error']) {
            case 1://Error exceso de tamañio de archivo en php.ini
                echo ("El tamaño del archivo excede lo permitido por el servidor");
                break;
            case 2://Error tamaño archivo marcado desde formulario
                echo ("El archivo excede a 2M");
                break;
            case 3://archivo corrupto falla del servidor
                echo ("El archivo se corrompio");
                break;
            case 4://No hay fichero
                echo ("No se ha enviado ningun archivo");
                break;
        }

    } else {

        if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK))) {
            $destino_de_ruta = "../imagenes/" . $_FILES['imagen']['name'];
            //$destino_de_ruta="/var/www/html/cursophp/blog/imagenes/".$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta);
            chmod($destino_de_ruta, 0777);
            //echo ("....Entrada subida correctamente </br>....");
        } else {
            echo "El archivo no se ha podido copiar al directoro de imagenes";
        }
    }
//$Manejo_Objeto= new Manejo_Ojetos($miconexion);
$Manejo_Objeto = new Manejo_objetos($miconexion);
//$blog=new Objeto_Blog();
$blog = new Objeto_Blog();
$blog->setTitulo(htmlentities(addslashes($_POST['campo_titulo']),ENT_QUOTES));
$blog->setFecha(Date("Y-m-d H:i:s"));
$blog->setComentario(htmlentities(addslashes($_POST['area_comentarios']),ENT_QUOTES));
$blog->setImagen($_FILES["imagen"]["name"]);
$Manejo_Objeto->insertaContenido($blog);
//echo "<br/> Entrada de blog correcto";


} catch (Exception $e) {
    die("No se por que se genera : " . $e->getMessage());
}
?>