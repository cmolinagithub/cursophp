<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<style type="text/css">
table {
  width: 300px;
  margin: auto;
  background-color: #FFC;
  border: 2px solid #F00;
  padding: 5px;
}

td {
  text-align: center;
}
</style>
<title>Pagina de busqueda</title>
</head>

<body>
  <h3>Este ejemplo, permite realizar busqueda con varios parametros. CON MARCADORES Y  METODO POST</h3>
  <form action="paginaPDOmarcadorVariosP.php" method="POST">
    <table>
      <tr>
        <td>Abierto por</td>
        <td><input type="text" name="abierto"></td>
      </tr>
      <tr>
        <td>Tecnico CTK</td>
        <td><input type="text" name="tecnico"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="enviando"
          value="Dale!"></td>
      </tr>
    </table>

  </form>

    <?php
    ?>
    </body>

</html>