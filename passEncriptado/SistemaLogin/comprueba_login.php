<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Conexion</title>
</head>
<body>
     <?php
    try {
        $base = new PDO("mysql:host=localhost; dbname=dbctk", "cmolina", "19841984");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM ctk_usuario where codigo= :login";
        $resultado = $base->prepare($sql);
        $login = htmlentities(addslashes($_POST["login"]));
        $password = htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login", $login);
        // $resultado->bindValue(":password", $password);
        $resultado->execute();
        $numero_registro = $resultado->rowCount();
        if ($numero_registro != 0) {
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

                if (password_verify($password, $registro['clave'])){
                    
                    session_start();
                    
                $_SESSION["usuario"] = $_POST["login"];
                header("location:usuariosRegistrados.php");
                }else{
                    echo ("La clave es incorrecta");
                }
            }
        } else
            header("location:login.php");
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }

    ?>
    </body>
</html>