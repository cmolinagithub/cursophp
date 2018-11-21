<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Intranet Crosstronik Cia.Ltda</title>
</head>
    <body>
    <?php
    session_start();
    if (!isset($_SESSION["usuario"])){
        header("location:login.php");
    }
    
    ?>
    
    <h1>Bien Venido INTRANET CTK Pagina 3</h1>
    
    <a href="cierre.php">Cerrar Sesion</a>
    <?php
    echo "</br>Hola: ". $_SESSION["usuario"]." Bien Venido </br> </br>";
    
    ?>
    <a href="usuariosRegistrados.php">Regresar</a>
    </body>
</html>