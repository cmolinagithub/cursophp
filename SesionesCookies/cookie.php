<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
    <body>
    <p>Cookies - Sesiones </p>
    <?php
    
    setcookie("prueba", "Esta es la informacion de nuestra primera Cookie",time()+300,"../var/www/html/phpCurso/SesionesCookies/zonaContenidos/");
    
    echo "lee la cokie".$_COOKIE["prueba"];

	?>
    </body>

</html>