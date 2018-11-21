<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<style type="text/css">
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    
}
p { color: black; font-family: Verdana; }
</style>
</head>
    <body>
    <p>This page uses frames. The current browser you are using does not support frames.</p>
    <?php
        require 'datos_conexion.php';
        //$conexion=mysqli_connect($db_host,$db_usuario,$db_clave,$db_base);
        $conexion=mysqli_connect($db_host,$db_usuario,$db_clave);
        if(mysqli_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }
        mysqli_select_db($conexion, $db_base) or die("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");
        //$consulta="SELECT * FROM ctk_detalle_ticket";
        $consulta="SELECT * FROM ctk_ticket WHERE tecnico_ctk='cmolina'";
        $resultados=mysqli_query($conexion, $consulta);
        /*$fila=mysqli_fetch_row($resultados);
        echo $fila[0]." ";
        echo $fila[1]." ";
        echo $fila[2]." ";
        echo $fila[3]." ";
        echo $fila[4]." ";
        echo $fila[5]." ";
        echo $fila[6]." ";
        echo $fila[7]." ";
        echo $fila[8]." ";
        */
        
        echo "<table borde='1'>";
        echo "<tr>";
        echo "<th>id_ticket</th>";
        echo "<th>codigo_ticket</th>";
        echo "<th>abierto_por</th>";
        echo "<th>fecha_apertura</th>";
        echo "<th>hora_apertura</th>";
        echo "<th>fecha_cierre</th>";
        echo "<th>hora_cierre</th>";
        echo "<th>visita_tecnica</th>";
        
        echo "<th>descripcion_evento</th>";
        echo "<th>tipo</th>";
        echo "<th>factura</th>";
        echo "<th>observacion</th>";
        echo "<th>tecnico_ctk</th>";
        echo "<th>codigo_cliente</th>";
        echo "<th>adicional</th>";
        echo "</tr>";
        
        // Bucle while que recorre cada registro y muestra cada campo en la tabla.
        while ($columna = mysqli_fetch_array($resultados,MYSQLI_ASSOC ))// esto permite obtener datos con nombres arrar asociativos 
        //otra forma
        //while ($columna = mysqli_fetch_row($resultados )) este permite extraer datos con indices 
        {
            echo "<tr>";
                      
            echo "<td>" . $columna['id_ticket'] 
            ."</td><td>" . $columna['codigo_ticket']
            ."</td><td>" . $columna['abierto_por']
            ."</td><td>" . $columna['fecha_apertura']
            ."</td><td>" . $columna['hora_apertura']
            ."</td><td>" . $columna['fecha_cierre']
            ."</td><td>" . $columna['hora_cierre']
            ."</td><td>" . $columna['visita_tecnica']
            ."</td><td><p>" . $columna['descripcion_evento']
            ."</p></td><td>" . $columna['tipo']
            ."</td><td>" . $columna['factura']
            ."</td><td>" . $columna['observacion']
            ."</td><td>" . $columna['tecnico_ctk']
            ."</td><td>" . $columna['codigo_cliente']
            ."</td><td>". $columna['adicional'] . "</td>";
            echo "</tr>";
            ///otra forma
           /* echo "<td>" . $columna[1]
            . "</td><td>" . $columna[2]
            . "</td><td>" . $columna[3]
            . "</td><td><p>" . $columna[4]
            . "</p></td><td>" . $columna[5]
            . "</td><td>" . $columna[6]
            . "</td><td>" . $columna[7]
            . "</td><td>". $columna[8] . "</td>";
            echo "</tr>";*/
            //fin otra forma
        }
        
        echo "</table>"; // Fin de la tabla
        // cerrar conexión de base de datos
        mysqli_close($conexion);
    ?>
    </body>

</html>