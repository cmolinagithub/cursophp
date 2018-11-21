<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Conexion PHP - PDO </title>
</head>

    <body>
    <h3>Conexion con PDO - PHP </h3>
    <?php
    try{
        $base = new PDO('mysql:host=localhost; dbname=dbctk','cmolina','19841984');
        echo "La conexion se realizo con exito";

    }
    catch (Exception $e){
        die('Error: '. $e->getMessage());

    }
    finally {
        $base=null;
    }

	?>
    </body>
</html>