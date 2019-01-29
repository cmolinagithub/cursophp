<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $miconexion=mysqli_connect("localhost","cmolina","19841984","dbblog");
    /*Comprobar conexion*/
    if(!$miconexion){
        echo "Laconexion ha fallado: " .mysqli_error();
        exit();
    }
    if($_FILES['imagen']['error']){
        switch($_FILES['imagen']['error']){
            case 1://Error exceso de tamañio de archivo en php.ini
            echo("El tamaño del archivo excede lo permitido por el servidor");
            break;
            case 2://Error tamaño archivo marcado desde formulario
            echo("El archivo excede a 2M");
            break;
            case 3://archivo corrupto falla del servidor
            echo("El archivo se corrompio");
            break;
            case 4://No hay fichero
            echo("No se ha enviado ningun archivo");
            break;         
        }

    }else{
        
        if((isset($_FILES['imagen']['name']) &&  ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){
            $destino_de_ruta="imagenes/".$_FILES['imagen']['name'];
            //$destino_de_ruta="/var/www/html/cursophp/blog/imagenes/".$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta);
            chmod($destino_de_ruta, 0777);
            echo("....Entrada subida correctamente </br>....");
        }else {
            echo "El archivo no se ha podido copiar al directoro de imagenes";
        }
    }
    $titulo=$_POST['campo_titulo'];
    $comentario=$_POST['area_comentarios'];
    $fecha=date("Y-m-d H:i:s");
    $imagen=$_FILES['imagen']['name'];

    echo"</br>";
    echo("$titulo </br>".$comentario. "</br>".$fecha."</br>".$imagen);

    $micosulta="INSERT INTO contenido (titulo, fecha, comentario, imagen) VALUES ('".$titulo."','".$fecha."','".$comentario."','".$imagen."');";
    echo("</br>conculta:".$micosulta);
    $resultado=mysqli_query($miconexion,$micosulta);
    ?>
    <a href="Formulario.php">Añadir Entrada</a><br/>
    <a href="Mostrar_blog.php">Ver Blog</a>
</body>

</html>