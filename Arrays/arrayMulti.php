<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Array multidimensional</title>
</head>
    <body>
    <h3>Ejemplos de Array multidimensional.</h3>
    <?php
        $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                        "citrico"=>"mandarina",
                                        "otros"=>"manzana"),
                        "leche"=>array("animal"=>"vaca",
                                       "vegetal"=>"coco"),
                        "carne"=>array("vacuno"=>"lomo",
                                        "porcino"=>"patas"));
       //echo $alimentos["carne"]["vacuno"];
       
      /*  foreach ($alimentos as $clave_alim=>$alim){
            echo "$clave_alim:</br>";
            while (list($clave,$valor)=each($alim)) {
                echo "$clave=$valor</br>";
            }
            echo "</br>";
        }
        */
        echo var_dump($alimentos);

	?>
    </body>

</html>