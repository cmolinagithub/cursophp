<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ordenar Array</title>
</head>

    <body>
    <h2>Ejemplo que permite ordenar un array</h2>
    <?php
    $semana=array("Lunes","Martes","Miercoles","Jueves");
    sort($semana);// funcion que permite ordenar un array
    
    for ($i=0;$i<count($semana);$i++){
        echo $semana[$i]."</br>";
    }

	?>
    </body>

</html>