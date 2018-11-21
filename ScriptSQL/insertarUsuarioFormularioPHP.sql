INSERT INTO `ctk_usuario`(
id
tipo
tipo_identificacion
numero_identificacion
apellidos
nombres
razon_social
codigo
direccion
telefono1
telefono2
celular1
celular2
email1
email2
fehca_nacimiento
profesion
actividades
rol
fecha_registro
descripcion
clave
repetir_clave
estado


parametro:

:u_tipo
:u_tipo_identificacion
:u_numero_identificacion
:u_apellidos
:u_nombres 
:u_razon_social
:u_codigo
:u_direccion 
:u_telefono1
:u_telefono2
:u_celular1
:u_celular2
:u_email1
:u_email2
:u_fecha_nacimiento
:u_profesion
:u_actividades
:u_rol
:u_fecha_registro
:u_descripcion
:u_clave
:u_repetir_clave


$tipo
$tipo_identificacion
$numero_identificacion
$apellidos
$nombres
$razon_social
$codigo
$direccion
$telefono1
$telefono2
$celular1
$celular2
$email1
$email2
$fecha_nacimiento
$profesion
$actividades
$rol
$fecha_registro
$descripcion
$clave
$repetir_clave


///



////

:u_tipo, :u_tipo_identificacion, :u_numero_identificacion, :u_apellidos, :u_nombres, :u_razon_social, :u_codigo, :u_direccion, 
:u_telefono1, :u_telefono2, :u_celular1, :u_celular2, :u_email1, :u_email2, :u_fecha_nacimiento, :u_profesion, :u_actividades,
:u_rol, :u_fecha_registro, :u_descripcion, :u_clave, :u_repetir_clave


"INSERT INTO `ctk_usuario`(`tipo`, `tipo_identificacion`, `numero_identificacion`, `apellidos`, `nombres`, `razon_social`, `codigo`, `direccion`, `telefono1`, `telefono2`, `celular1`, `celular2`, `email1`, `email2`, `fecha_nacimiento`, `profesion`, `actividades`, `rol`, `fecha_registro`, `descripcion`, `clave`, `repetir_clave`) VALUES (:u_tipo, :u_tipo_identificacion, :u_numero_identificacion, :u_apellidos, :u_nombres, :u_razon_social, :u_codigo, :u_direccion, 
:u_telefono1, :u_telefono2, :u_celular1, :u_celular2, :u_email1, :u_email2, :u_fecha_nacimiento, :u_profesion, :u_actividades,
:u_rol, :u_fecha_registro, :u_descripcion, :u_clave, :u_repetir_clave)";



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
":u_celular2" => $celular2
":u_email1" => $email1,
":u_email2" => $email2,
":u_fecha_nacimiento" => $fecha_nacimiento,
":u_profesion" => $profesion,
":u_actividades" => $actividades,
":u_rol" => $rol,
":u_fecha_registro" => $fecha_registro,
":u_descripcion" => $descripcion,
":u_clave" => $clave,
":u_repetir_clave"$repetir_clave










