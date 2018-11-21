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
$sql="SELECT codigo_ticket, abierto_por, fecha_apertura, fecha_cierre, 
descripcion_evento, tecnico_ctk FROM ctk_ticket WHERE tecnico_ctk=?";
$resultado=mysqli_prepare($conexion, $sql);
$ok=mysqli_stmt_bind_param($resultado, "s", $buscar);
$ok=mysqli_stmt_execute($resultado);
if($ok==false){
    echo "Error al ejecutar la consulta";
}else{
    $ok=mysqli_stmt_bind_result($resultado, $codigo_ticket, $abierto_por, $fecha_apertura, $fecha_cierre, $descripcion_evento, $tecnico_ctk);
    echo "</br>Articulos encontrados </br></br>";
    
    echo "<table borde='1'>";
    echo "<tr>";
    echo "<th>codigo_ticket</th>";
    echo "<th>abierto_por</th>";
    echo "<th>fecha_apertura</th>";
    echo "<th>fecha_cierre</th>";
    echo "<th>descripcion_evento</th>";
    echo "<th>tecnico_ctk</th>";
    echo "</tr>";
    while (mysqli_stmt_fetch($resultado))
    {
        echo "<tr>";
        echo "<td> $codigo_ticket</td>";
        echo "<td> $abierto_por</td>";
        echo "<td>$fecha_apertura</td>";
        echo "<td>$fecha_cierre</td>";
        echo "<td><p>$descripcion_evento</p></td>";
        echo "<td>$tecnico_ctk</td>";
        echo "</tr>";
    }
        echo "</table>";
    mysqli_stmt_close($resultado);
    
}
mysqli_close($conexion);
?>
</body>
</html>