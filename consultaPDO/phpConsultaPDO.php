<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
    <body>
    <p>This page uses frames. The current browser you are using does not support frames.</p>
    <?php
    try{
        $base = new PDO('mysql:host=localhost; dbname=dbctk','cmolina','19841984');
      }
    catch (Exception $e){
        die('Error: '. $e->getMessage());

    }
    finally {
        $base=null;
    }


	?>
</html>