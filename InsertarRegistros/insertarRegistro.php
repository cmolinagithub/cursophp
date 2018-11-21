<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Insertar registros a la BBDD</title>
    </head>
    <body>
        <h1>Ingresar datos a la Base de Datos</h1>
        <?php
        echo $_SERVER['HTTP_USER_AGENT'];
        
        echo "Variable correspondientes Ticket";
        $codigo_ticket=$_GET["codigo_ticket"];
        $abierto_por=$_GET["abierto_por"];
        $fecha_apertura=date("Y-m-d");
        $hora_apertura=date("H:i:s"); 
        $fecha_cierre=date("Y-m-d");
        $hora_cierre=date("H:i:s"); 
        $visita_tecnica=0;
        $descripcion_evento=$_GET["descripcion_evento"];
        $tipo=$_GET["tipo"];
        $factura=$_GET["factura"];
        $observacion=$_GET["observacion"];
        $tecnico_ctk=$_GET["tecnico_ctk"];
        $codigo_cliente="PRIMUS";
        $adicional=$_GET["adicional"];

        require 'datos_conexion.php';
        $conexion=mysqli_connect($db_host,$db_usuario,$db_clave);
        if(mysqli_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }
        mysqli_select_db($conexion, $db_base) or die("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");
        $ingresar="INSERT INTO `ctk_ticket` (`codigo_ticket`, `abierto_por`, `fecha_apertura`, `hora_apertura`, `fecha_cierre`, `hora_cierre`, `visita_tecnica`, `descripcion_evento`, `tipo`, `factura`, `observacion`, `tecnico_ctk`, `codigo_cliente`, `adicional`) VALUES
        ('$codigo_ticket', '$abierto_por', '$fecha_apertura', '$hora_apertura', '$fecha_cierre', '$hora_cierre',$visita_tecnica, '$descripcion_evento', '$tipo', '$factura', '$observacion', '$tecnico_ctk', '$codigo_cliente', '$adicional')";
        echo "</br></br>$ingresar";
        $resultados=mysqli_query($conexion, $ingresar);
        if($resultados==FALSE)
        {
            echo "REGISTRO NO GUARDADO ";
        }else
        {
            echo "El registro se guardo correctamente";
        }
        
        mysqli_close($conexion);
        ?>
    </body>
</html>