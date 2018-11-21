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
        $descripcion_evento=$_GET["descripcion_evento"];
        $tipo=$_GET["tipo"];
        $factura=$_GET["factura"];
        $observacion=$_GET["observacion"];
        $tecnico_ctk=$_GET["tecnico_ctk"];
        $adicional=$_GET["adicional"];
        require 'datos_conexion.php';
        $conexion=mysqli_connect($db_host,$db_usuario,$db_clave);
        if(mysqli_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }
        mysqli_select_db($conexion, $db_base) or die("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");
        echo "</br></br>";
        $actualizar="UPDATE ctk_ticket SET abierto_por='$abierto_por',descripcion_evento='$descripcion_evento',tipo='$tipo',
        factura='$factura', observacion='$observacion',tecnico_ctk='$tecnico_ctk', adicional='$adicional' WHERE codigo_ticket='$codigo_ticket'";
        echo "</br></br>";
        echo  $actualizar;
        echo "</br></br>";
        $resultados=mysqli_query($conexion, $actualizar);
        if($resultados==FALSE)
        {
            echo "REGISTRO NO ACTUALIZADO ";
        }else
        {
            echo "El registro se actualizo correctamente";
        }
        
        mysqli_close($conexion);
        ?>
    </body>
</html>