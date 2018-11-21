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
<h1>Registro de Tickets...</h1>
<form name="form1" method="get" action="insertarRegistro.php">
  <table border="0" align="center">
    <tr>
      <td>Código del Ticket </td>
      <td><label for="codigo_ticket"></label>
      <input type="text" name="codigo_ticket" id="codigo_ticket"></td>
    </tr>
    <tr>
      <td>Abierto por </td>
      <td><label for="abierto_por"></label>
      <input type="text" name="abierto_por" id="abierto_por"></td>
    </tr>
    <tr>
    <tr>
      <td>Descripcion del evento</td>
      <td><label for="descripcion_evento"></label>
      <input type="text" name="descripcion_evento" id="descripcion_evento"></td>
    </tr>
    <tr>
      <td>Tipo del evento</td>
      <td><label for="tipo"></label>
      <input type="text" name="tipo" id="tipo"></td>
    </tr>
    <tr>
      <td>Aplica Facturación</td>
      <td><label for="factura"></label>
      <input type="text" name="factura" id="factura"></td>
    </tr>
    <tr>
      <td>Observacion Adicional</td>
      <td><label for="observacion"></label>
      <input type="text" name="observacion" id="observacion"></td>
    </tr>
    <tr>
      <td>Técnico CTK</td>
      <td><label for="tecnico_ctk"></label>
      <input type="text" name="tecnico_ctk" id="tecnico_ctk"></td>
    </tr>
    <tr>
    <tr>
      <td>Adicional</td>
      <td><label for="tecnico_ctk"></label>
      <input type="text" name="tecnico_ctk" id="tecnico_ctk"></td>
    </tr>
    <tr>
    
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