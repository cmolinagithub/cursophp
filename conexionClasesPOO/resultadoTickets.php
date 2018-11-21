<?php
    require "DevuelveTickets.php";
    $tickets=new DevuelveTickets();
    $array_tickets=$tickets->getTickets();
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Resultado Tickets con Clases y POO</title>
</head>

    <body>
    <h3>Ejemplo Con clases Personalizadas y POO .</h3>
    <?php
    echo "</br>Articulos encontrados </br></br>";
    
    echo "<table borde='1'>";
    echo "<tr>";
    echo "<th>codigo_ticket</th>";
    echo "<th>abierto_por</th>";
    echo "<th>fecha_apertura</th>";
    echo "<th>fecha_cierre</th>";
    echo "<th>visita_tecnica</th>";
    echo "<th>descripcion_evento</th>";
    echo "<th>tecnico_ctk</th>";
    echo "<th>codigo_cliente</th>";
    echo "</tr>";
    
   
    foreach ($array_tickets as $columna)
    {
        echo "<tr>";
        
        echo "<td>". $columna['codigo_ticket']."</td>";
        echo "<td>" . $columna['abierto_por']."</td>";
        echo "<td>" . $columna['fecha_apertura']."</td>";
        echo "<td>" . $columna['fecha_cierre']."</td>";
        echo "<td>" . $columna['visita_tecnica']."</td>";
        echo "<td><p>". $columna['descripcion_evento']."</p></td>";
        echo "<td>" . $columna['tecnico_ctk']."</td>";
        echo "<td>" . $columna['codigo_cliente']."</td>";
        echo "</tr>";
    }
    
    echo "</table>"; // Fin de la tabla

    

	?>
    </body>
</html>