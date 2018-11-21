<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Consulta con POO</title>
<style type="text/css">
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;

}
p { color: black; font-family: Verdana; }
</style>
</head>
    <body>
    <h3>Ejemplo de Consulta con conexion POO.</h3>
    <?php
    $conexion=new mysqli("localhost", "cmolina","19841984","dbctk");
    if($conexion->connect_errno){
        echo "Fallo la conexion, por favor revisar ".$conexion->connect_errno;
    }
    //mysqli_set_charset($conexion, "utf8"); procedimental
    $conexion->set_charset("utf8");//orientada a objetos
    $sql="SELECT codigo_ticket, abierto_por, fecha_apertura, fecha_cierre
        , visita_tecnica, descripcion_evento, tecnico_ctk, codigo_cliente FROM ctk_ticket";
    //$resultados=mysqli_query($conexion, $sql); //procedimental
    $resultados=$conexion->query($sql);

    if($conexion->errno){
        die($conexion->errno);
    }
    //while ($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)) {
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
    while($fila=$resultados->fetch_assoc()){

        echo "<tr>";
        echo "<td>". $fila['codigo_ticket']."</td>";
        echo "<td>" . $fila['abierto_por']."</td>";
        echo "<td>" . $fila['fecha_apertura']."</td>";
        echo "<td>" . $fila['fecha_cierre']."</td>";
        echo "<td>" . $fila['visita_tecnica']."</td>";
        echo "<td><p>". $fila['descripcion_evento']."</p></td>";
        echo "<td>" . $fila['tecnico_ctk']."</td>";
        echo "<td>" . $fila['codigo_cliente']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    //mysqli_close($conexion);
    $conexion->close();


	?>
    </body>

</html>