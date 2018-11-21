<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pagina PDO</title>
<style type="text/css">
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;

}
p { color: black; font-family: Verdana; }
</style>
</head>
<body>
  <h3>Pagina de consulta con PHP - PDO </br>EJEMPLO CON MARCADORES Y METODO POST </h3>
    <?php
    $abierto_por=$_POST["abierto"];
    $tecnico_ctk=$_POST["tecnico"];
    try {

        $base = new PDO('mysql:host=localhost; dbname=dbctk', 'cmolina', '19841984');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");

        $sql = "SELECT codigo_ticket, abierto_por, fecha_apertura, fecha_cierre
        , visita_tecnica, descripcion_evento, tecnico_ctk, codigo_cliente FROM ctk_ticket where abierto_por=:in_abi and tecnico_ctk=:in_tec";
        $resultado= $base->prepare($sql);//varible resultado almacena el objeto de tipo PDO statement
        //el objeto base(conexión)
        $resultado->execute(array("in_abi"=>$abierto_por,"in_tec"=>$tecnico_ctk ));

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
        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>". $registro['codigo_ticket']."</td>";
            echo "<td>" . $registro['abierto_por']."</td>";
            echo "<td>" . $registro['fecha_apertura']."</td>";
            echo "<td>" . $registro['fecha_cierre']."</td>";
            echo "<td>" . $registro['visita_tecnica']."</td>";
            echo "<td><p>". $registro['descripcion_evento']."</p></td>";
            echo "<td>" . $registro['tecnico_ctk']."</td>";
            echo "<td>" . $registro['codigo_cliente']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        $resultado->closeCursor();

    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    } finally {
        $base = null;
    }

    ?>
    </body>

</html>