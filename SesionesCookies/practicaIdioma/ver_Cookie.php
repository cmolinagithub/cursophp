<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

    <body>

    <?php
       
    if(!$_COOKIE["idioma_seleccionado"]){
        header("Location:index.php");
    }else if($_COOKIE["idioma_seleccionado"]=="es"){
        header("Location:spanish.php");
    }else if($_COOKIE["idioma_seleccionado"]=="en"){
        header("Location:english.php");
        
    }
    

	?>
    </body>

</html>