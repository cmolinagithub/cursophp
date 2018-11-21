<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingreso de Tickets</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>
</head>

<!-- 
codigo_ticket
abierto_por
fecha_apertura
hora_apertura
fecha_cierre
hora_cierre
visita_tecnica
descripcion_evento
tipo
factura
observacion
tecnico_ctk
codigo_cliente
adicional
 -->


<body>
<h1>Eliminar Tickets...</h1>
<form name="form1" method="get" action="eliminarRegistro.php">
  <table border="0" align="center">
    <tr>
      <td>Código del Ticket </td>
      <td><label for="codigo_ticket"></label>
      <input type="text" name="codigo_ticket" id="codigo_ticket"></td>
    </tr>
       <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>