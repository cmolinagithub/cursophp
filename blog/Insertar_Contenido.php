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
        
    }
    ?>
</body>
</html>