<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<style type="text/css">
table {
  width: 300px;
  margin: auto;
  background-color: #FFC;
  border: 2px solid #F00;
  padding: 5px;
}

.izq {
  text-align: left;
}

.der {
  text-align: right;
}

.cen {
  text-align: center;
}
</style>
<title>Login</title>
</head>

<body>
<?php
$autenticado = false;

if (isset($_POST["enviar"])) {
    try {
        $base = new PDO("mysql:host=localhost; dbname=dbctk", "cmolina", "19841984");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM ctk_usuario where codigo_usuario= :login AND clave_usuario= :password";
        $resultado = $base->prepare($sql);
        $login = htmlentities(addslashes($_POST["login"]));
        $password = htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login", $login);
        $resultado->bindValue(":password", $password);
        $resultado->execute();
        $numero_registro = $resultado->rowCount();
        if ($numero_registro != 0) {
            $autenticado = true;
            if (isset($_POST["recordar"])) {
                echo "Valor del usuario" . $_POST["login"];
                setcookie("nombre_usuario", $_POST["login"], time() + 864);
            }
            include ("registrados.html");
            
        } else {
            echo "Datos incorrectos, no se enuentra registrado....";
            //header("location:login.php");

            
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
?>

<?php
if ($autenticado == false) {
    if (! isset($_COOKIE["nombre_usuario"])) {

        include ("formulario.html");
    } else {
        include ("registrados.html");
    }
}
?>


</body>

</html>