<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Blog</h2>
    <hr/>
    <?php
    $miconexion=mysqli_connect("localhost","cmolina","19841984","dbblog");
    /*Comprobar conexion*/
    if(!$miconexion){
        echo "Laconexion ha fallado: " .mysqli_error();
        exit();
    }
    $miconsulta="SELECT * FROM contenido order by fecha desc";
    if($resultado=mysqli_query($miconexion,$miconsulta))
    {
        while ($registro=mysqli_fetch_assoc($resultado)){
            
            echo "<h3>".$registro['titulo']."</h3>";
            echo "<h4>".$registro['fecha']."</h4>";
            echo "<div style='width:400px'>".$registro['comentario']."</div> <br/><br/>";
            if($registro['imagen']!=""){
                echo "<img src='imagenes/".$registro['imagen']."' width='300px' />";
            }
            echo "<hr/>";
        }
    }

    ?>
</body>
</html>