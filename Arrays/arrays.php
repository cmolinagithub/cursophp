<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ejemplo Arrays</title>
</head>
    <body>
    <h1>Este es un ejemplo de Arrays pilas ..........jijijiji</h1>
    <?php
        /*$semana[]="Lunes";
        $semana[]="Martes";
        $semana[]="Miercoles";*/
    //$semana=array("Lunes","Martes","Miercoles");
    //echo $semana[2];
    
    $datos_personales=array("Nombre"=>"Carlos","Apellido"=>"Molina","Edad"=>23);
    
    //$datos_personales="Carlos";    
    //$datos_personales="Carlos Molina";
    if(is_array($datos_personales))
    {
        echo "Si es un array.. por favor tomar en cuenta </br></br>";
    }
    else{
        echo "No es un array. tome las consideraciones </br>";
    }
    $datos_personales["Pais"]="Ecuador";
    //introducir multiples keys a un array asociativo
    $datos_personales=array_merge($datos_personales, array("signo"=>"Turo","color"=>"azul"));
    
    echo "Ejemplo de Array asociativos</br>";
    foreach ($datos_personales as $clave=>$valor){
        echo "A $clave le corresponde $valor </br>";
    }
    
    echo "</br>Ejemplo de array indexado </br></br>";
    $semana[]="Lunes";
    $semana[]="Martes";
    $semana[]="Miercoles";
    $semana[]="Jueves";
    //for ($i=0;$i<4;$i++)
    for ($i=0;$i<count($semana);$i++)
    {
        echo $semana[$i]."</br>";
    }
    echo "</br>Agregar elemento al array indexado</br></br>";
    
    $semana[]="Viernes";
    
    //Varios elementos
    ////array_push para agregar varios elementos
    
    array_push($semana, "Sabado", "Domingo");
    
    for ($i=0;$i<count($semana);$i++)
    {
        echo $semana[$i]."</br>";
    }

    
    

	?>
    </body>

</html>