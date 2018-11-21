<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Eliminar registros a la BBDD</title>
    </head>
    <body>
        <h1>Eliminar registros de la Base de Datos</h1>
        <?php
        echo $_SERVER['HTTP_USER_AGENT'];
        
        echo "Variable correspondientes Ticket";
        $codigo_ticket=$_GET["codigo_ticket"];
        
        require 'datos_conexion.php';
        $conexion=mysqli_connect($db_host,$db_usuario,$db_clave);
        if(mysqli_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }
        mysqli_select_db($conexion, $db_base) or die("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");
        $eliminar="DELETE FROM `ctk_ticket`  WHERE codigo_ticket='$codigo_ticket'";
        $resultados=mysqli_query($conexion, $eliminar);
        if(mysqli_affected_rows($conexion)>0 && $resultados==true){
                echo "</br></br> Se han eliminado ".mysqli_affected_rows($conexion)." registros";
                
       }else
        {
                echo "</br></br>No existen registros con ese criterio";
            
      }
        
        mysqli_close($conexion);
        ?>
    </body>
</html>