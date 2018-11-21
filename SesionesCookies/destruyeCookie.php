<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Destruye la Cookie</title>
</head>
    <body>
    <p>Esta Pagina nos permite eliminar una Cookie.</p>
    <?php
    
    setcookie("prueba", "Esta es la informacion de nuestra primera Cookie",time()-1,"zonaContenidos");
    

	?>
    </body>

</html>