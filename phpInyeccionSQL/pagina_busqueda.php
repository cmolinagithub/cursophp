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
<h3>...RESULTADO DE LA BUSQUEDA...</h3>
<?php
$buscar=$_GET["buscar"];
echo  "Este es el parametro se busqueda $buscar";
//$buscar='cmolina';
require 'datos_conexion.php';
$conexion=mysqli_connect($db_host,$db_usuario,$db_clave);
if(mysqli_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_base) or die("No se encuentra la BBDD");
mysqli_set_charset($conexion, "utf8");
$consulta="SELECT * FROM ctk_ticket WHERE descripcion_evento LIKE '%$buscar%'";
echo "</br></br>$consulta</br></br>";
$resultados=mysqli_query($conexion, $consulta);
echo "<table borde='1'>";
echo "<tr>";
//echo "<th>id_ticket</th>";
echo "<th>codigo_ticket</th>";
echo "<th>abierto_por</th>";
echo "<th>fecha_apertura</th>";
//echo "<th>hora_apertura</th>";
echo "<th>fecha_cierre</th>";
//echo "<th>hora_cierre</th>";
echo "<th>visita_tecnica</th>";
echo "<th>descripcion_evento</th>";
//echo "<th>tipo</th>";
//echo "<th>factura</th>";
//echo "<th>observacion</th>";
echo "<th>tecnico_ctk</th>";
echo "<th>codigo_cliente</th>";
//echo "<th>adicional</th>";
echo "</tr>";

// Bucle while que recorre cada registro y muestra cada campo en la tabla.
while ($columna = mysqli_fetch_array($resultados,MYSQLI_ASSOC ))// esto permite obtener datos con nombres arrar asociativos
{
    echo "<tr>";
    
    //echo "<td>" . $columna['id_ticket']."</td>";
         echo "<td>". $columna['codigo_ticket']."</td>";
         echo "<td>" . $columna['abierto_por']."</td>";
         echo "<td>" . $columna['fecha_apertura']."</td>";
         //echo "<td>" . $columna['hora_apertura']."</td>;
         echo "<td>" . $columna['fecha_cierre']."</td>";
         //echo "<td>" . $columna['hora_cierre']."</td>
         echo "<td>" . $columna['visita_tecnica']."</td>";
         echo "<td><p>". $columna['descripcion_evento']."</p></td>";
         //echo "<td>" . $columna['tipo']."</td>";
         //echo "<td>" . $columna['factura']."</td>";
         //echo "<td>" . $columna['observacion']."</td>";
         echo "<td>" . $columna['tecnico_ctk']."</td>";
         echo "<td>" . $columna['codigo_cliente']."</td>";
         //echo "<td>". $columna['adicional'] . "</td>";
    echo "</tr>";
  }

echo "</table>"; // Fin de la tabla
// cerrar conexión de base de datos
mysqli_close($conexion);
?>
</body>
</html>