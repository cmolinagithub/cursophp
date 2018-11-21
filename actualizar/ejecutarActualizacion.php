<?php
$codigo_ticket=$_GET['codigo'];
    require 'datos_conexion.php';
    $conexion=mysqli_connect($db_host,$db_usuario,$db_clave);
    if(mysqli_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, $db_base) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");
    $consulta="SELECT * FROM ctk_ticket WHERE codigo_ticket='$codigo_ticket'";
    $resultados=mysqli_query($conexion, $consulta);
    $columna = mysqli_fetch_array($resultados,MYSQLI_ASSOC);
    echo "
    <form name='form1' method='get' action='actualizarRegistro.php'>
    <table border='0' align='center'>
    <tr>
    <td>Código del Ticket </td>
    <td><label for='codigo_ticket'></label>
    <input type='text' name='codigo_ticket' id='codigo_ticket' readonly='readonly' value='".$columna['codigo_ticket']."'></td>
    </tr>
    <tr>
    <td>Abierto por </td>
    <td><label for='abierto_por'></label>
    <input type='text' name='abierto_por' id='abierto_por' value='".$columna['abierto_por']."'></td>
    </tr>
    <tr>
    <tr>
    <td>Descripcion del evento</td>
    <td><label for='descripcion_evento'></label>
    <input type='text' name='descripcion_evento' id='descripcion_evento' value='".$columna['descripcion_evento']."'></td>
    </tr>
    <tr>
    <td>Tipo del evento</td>
    <td><label for='tipo'></label>
    <input type='text' name='tipo' id='tipo' value='".$columna['tipo']."'></td>
    </tr>
    <tr>
    <td>Aplica Facturación</td>
    <td><label for='factura'></label>
    <input type='text' name='factura' id='factura' value='".$columna['factura']."'></td>
    </tr>
    <tr>
    <td>Observacion Adicional</td>
    <td><label for='observacion'></label>
    <input type='text' name='observacion' id='observacion' value='".$columna['observacion']."'></td>
    </tr>
    <tr>
    <td>Técnico CTK</td>
    <td><label for='tecnico_ctk'></label>
    <input type='text' name='tecnico_ctk' id='tecnico_ctk' value='".$columna['tecnico_ctk']."'></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td align='center'><input type='submit' name='enviar' id='enviar' value='Actualizar'></td>
     </tr>
    </table>
    </form>";

?>
