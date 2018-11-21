<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Insertar registros a la BBDD</title>
    </head>
    <body>
        <h1>Ingresar datos a la Base de Datos</h1>
        <?php 
        require 'datos_conexion.php';
        $conexion=mysqli_connect($db_host,$db_usuario,$db_clave);
        if(mysqli_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }
        mysqli_select_db($conexion, $db_base) or die("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");
        $consulta="INSERT INTO `ctk_ticket` (`codigo_ticket`, `abierto_por`, `fecha_apertura`, `hora_apertura`, `fecha_cierre`, `hora_cierre`, `visita_tecnica`, `descripcion_evento`, `tipo`, `factura`, `observacion`, `tecnico_ctk`, `codigo_cliente`, `adicional`) VALUES
        ('67-PM', 'kpastran', '2018-08-01', '09:55:59', '2018-08-01', '15:05:00', 0, 'FALLA INTERNET', 'Otros', 'si (servicio)', 'CANT: 0.5 / COD: 7SER', 'cmolina', 'PRIMUS', '')";
        $resultados=mysqli_query($conexion, $consulta);
        

        mysqli_close($conexion);
        ?>
    </body>
</html>