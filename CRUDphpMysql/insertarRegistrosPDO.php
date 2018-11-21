 <?php
$tipo = $_POST["tipo"];
$tipo_identificacion = $_POST["tipo_identificacion"];
$numero_identificacion = $_POST["numero_identificacion"];
$apellidos = $_POST["apellidos"];
$nombres = $_POST["nombres"];
$razon_social = $_POST["razon_social"];
$codigo = $_POST["codigo"];
$direccion = $_POST["direccion"];
$telefono1 = $_POST["telefono1"];
$telefono2 = $_POST["telefono2"];
$celular1 = $_POST["celular1"];
$celular2 = $_POST["celular2"];
$email1 = $_POST["email1"];
$email2 = $_POST["email2"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$profesion = $_POST["profesion"];
$actividades = $_POST["actividades"];
$rol = $_POST["rol"];
date_default_timezone_set('America/Guayaquil');
$fecha_registro = date("Y-m-d H:i:s");
$descripcion = $_POST["descripcion"];
$clave = $_POST["clave"];
$clave_cifrada=password_hash($clave, PASSWORD_DEFAULT);
//MODIFICAR EL COSTE ES DECIR LA FUERZA DE ENCRIPTACION SE AUMENTA UN PARAMETO;
//$clave_cifrada=password_hash($clave, PASSWORD_DEFAULT,array("cost"=>12));
$repetir_clave = $_POST["repetir_clave"];
$repetir_clave_cifrada=password_hash($repetir_clave,PASSWORD_DEFAULT);
//$repetir_clave_cifrada=password_hash($clave, PASSWORD_DEFAULT,array("cost"=>12));

try {

    $base = new PDO('mysql:host=localhost; dbname=dbctk', 'cmolina', '19841984');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    $sql = "INSERT INTO `ctk_usuario`(`tipo`, `tipo_identificacion`, `numero_identificacion`, `apellidos`, 
    `nombres`, `razon_social`, `codigo`, `direccion`, `telefono1`, `telefono2`, `celular1`, `celular2`, 
    `email1`, `email2`, `fecha_nacimiento`, `profesion`, `actividades`, `rol`, `fecha_registro`, `descripcion`, 
    `clave`, `repetir_clave`) VALUES (:u_tipo, :u_tipo_identificacion, :u_numero_identificacion, :u_apellidos, 
    :u_nombres, :u_razon_social, :u_codigo, :u_direccion, :u_telefono1, :u_telefono2, :u_celular1, :u_celular2, 
    :u_email1, :u_email2, :u_fecha_nacimiento, :u_profesion, :u_actividades,:u_rol, :u_fecha_registro, 
    :u_descripcion, :u_clave, :u_repetir_clave)";
    $resultado = $base->prepare($sql); // varible resultado almacena el objeto de tipo PDO statement
                                       // el objeto base(conexión)
    $resultado->execute(array(
        ":u_tipo" => $tipo,
        ":u_tipo_identificacion" => $tipo_identificacion,
        ":u_numero_identificacion" => $numero_identificacion,
        ":u_apellidos" => $apellidos,
        ":u_nombres" => $nombres,
        ":u_razon_social" => $razon_social,
        ":u_codigo" => $codigo,
        ":u_direccion" => $direccion,
        ":u_telefono1" => $telefono1,
        ":u_telefono2" => $telefono2,
        ":u_celular1" => $celular1,
        ":u_celular2" => $celular2,
        ":u_email1" => $email1,
        ":u_email2" => $email2,
        ":u_fecha_nacimiento" => $fecha_nacimiento,
        ":u_profesion" => $profesion,
        ":u_actividades" => $actividades,
        ":u_rol" => $rol,
        ":u_fecha_registro" => $fecha_registro,
        ":u_descripcion" => $descripcion,
        ":u_clave" => $clave_cifrada,
        ":u_repetir_clave"=>$repetir_clave_cifrada
    ));
    echo "...............Registro insertado...........";

    $resultado->closeCursor();
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
} finally {
    $base = null;
}

?>