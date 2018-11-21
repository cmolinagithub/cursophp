<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
  
    <?php
    setcookie("idioma_seleccionado", $_GET["idioma"], time() + 86409);
    header("Location:ver_Cookie.php");

    ?>
    </body>

</html>