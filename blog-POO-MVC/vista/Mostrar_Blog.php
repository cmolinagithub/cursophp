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
    echo("Inicio Mostrar blog");
    include_once("../modelo/Manejo_Objetos.php");
    try {
        $miconexion = new PDO('mysql:host=localhost; dbname=dbblog', 'cmolina', '19841984');
        $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo("Conexion exitosa");

        $Manejo_Objetos = new Manejo_Objetos($miconexion);
        $tabla_blog = $Manejo_Objetos->getContenidoPorFecha();
        if (empty($tabla_blog)) {
            echo ("No exiete entradas en el blog");
        } else {
            foreach ($tabla_blog as $valor) {
                echo "<h3>" . $valor->getTitulo() . "</h3>";
                echo "<h4>" . $valor->getFecha() . "</h4>";
                echo "<div styl='width:400px'>";
                echo $valor->getComentario() . "</div>";
                //echo "<br/>Ruta Imagen: ".$valor->getImagen();                
               if ($valor->getImagen() != "") {
                   //$rutaimg="../imagenes/".$valor->getImagen();//Ojo asi me funcciono 
                   echo "<img src='../imagenes/".$valor->getImagen()."' width='300px' height='200px'/>";
                    //echo "<img src='".$rutaimg."' width='300px' height='200px'/>";
                }
                //echo "<br />Ruta img: ".$rutaimg;
                echo"<hr/>";
            }
        }

    } catch (Exception $e) {
        die("No se por que se genera : " . $e->getMessage());
    }
    ?>
<a href="Formulario.php">Volver a Insertar blog </a>

</body>
</html>