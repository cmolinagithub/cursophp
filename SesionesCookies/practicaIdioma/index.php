<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Escoja el Idioma</title>
</head>
<body>
    <?php 
    if(isset($_COOKIE["idioma_seleccionado"])){
        
        if($_COOKIE["idioma_seleccionado"]=="es"){
            header("Location:spanish.php");
        }else if($_COOKIE["idioma_seleccionado"]=="en"){
            header("Location:english.php");
            
        }
    }
    ?>

    <table width="25%" border="0" align="center">
    <tr>
      <td colspan="2" align="center"><h1>Escoja el Idioma</h1></td>
    </tr>
    <tr>
      <td align="center"><a href="creaCookie.php?idioma=es"><img
          src="img/es.png" width="90" height="60"></a></td>
      <td align="center"><a href="creaCookie.php?idioma=en"><img
          src="img/en.png" width="90" height="60"></a></td>
    </tr>

  </table>
    
    <?php

	?>



</html>