<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vizualizar imegen de BBDD</title>
</head>
<body>
    <?php
    require "datos_conexion.php";
    $conexion = mysqli_connect($db_host, $db_user, $db_pass);
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, $db_base) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");
    $sql ="SELECT image from cj_user where user_id=1;";
    $resultado = mysqli_query($conexion, $sql);
    while($fila=mysqli_fetch_array($resultado)){
        $imagen=$fila["image"];
    }
    echo("ruta imagen: ".$imagen);
    ///var/www/html/cursophp/subirImagenes/imagenes/carl...

    ?>
    <div>
        <img src="imagenes/<?php echo $imagen; ?>" alt="Imagen inicial" width="45%"/>
    </div>

    
</body>
</html>