<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Intranet Crosstronik Cia.Ltda</title>
</head>
<body>
    <?php
    session_start();
    if (! isset($_SESSION["usuario"])) {
        header("location:login.php");
    }

    ?>
    
    <h1>Bien Venido INTRANET CTK</h1>
    <?php
    echo "Hola: " . $_SESSION["usuario"] . " Bien Venido </br> </br>";
    echo "<p>Zona para usuarios registrados  ..... Escoja una de las siguiente opciones: </p>";
    ?>
      <a href="cierre.php">Cerrar Sesion</a>
    <table border="1">
    <tr>
      <td colspan="3">Zona de Usuario registrados</td>
    </tr>
    <tr>
      <td><a href="usuariosRegistrados1.php">Pagina 1</a></td>
      <td><a href="usuariosRegistrados2.php">Pagina 2</a></td>
      <td><a href="usuariosRegistrados3.php">Pagina 3</a></td>
     </tr>
  </table>
</body>
</html>