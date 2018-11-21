<?php
    require "procesar_usuarioOBJ.php";
    $usuarios=new ProcesarUsuario();
    $usuariosOBJ=$usuarios->getUsuario();
    $cont=1;
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>Usuario</title>
<meta charset="UTF-8">
<meta name="title" content="Registro de usuarios">
<meta name="description" content="Descripción de la WEB">
<link href="http://dominio.com/hoja-de-estilos.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <header>
    <h1>Usuarios</h1>
  </header>
  <nav>
    <a href="">INGRESAR</a> 
    <a href="">ACTUALIZAR</a>
    
  </nav>
  <section>
  <table class="table table-responsive table-striped">
    <thead>
        <tr>
        	<td>ID</td>
           <td>Usuario</td>
            <td>Tipo Iden</td>
            <td>Num</td>
            <td>Nombres</td>
            <td>Codigo</td>
            <td>telefono1</td>
            <td>celular1</td>
            <td>email1</td>
            <td>profesion</td>
            <td>actividades</td>
            <td>rol</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($usuariosOBJ as $usuario):?>
        <tr>
            <td><?php echo $cont;?></td>
            <td><?php echo $usuario->tipo;?></td>
            <td><?php echo $usuario->tipo_identificacion;?></td>
            <td><?php echo $usuario->numero_identificacion;?></td>
            <td><?php echo $usuario->nombres." ".$usuario->apellidos;?></td>
            <td><?php echo $usuario->codigo;?></td>
            <td><?php echo $usuario->telefono1;?></td>
            <td><?php echo $usuario->celular1;?></td>
            <td><?php echo $usuario->email1;?></td>
            <td><?php echo $usuario->profesion;?></td>
            <td><?php echo $usuario->actividades;?></td>
            <td><?php echo $usuario->rol;?></td>
            <td><a href="" title="Detalle Usuario"><i class="glyphicon glyphicon-eye-open"></i></a>
            <a href="" title="Editar Usuario"><i class="glyphicon glyphicon-edit"></i></a>
            <a href="" title="Eliminar Usuario"><i class="glyphicon glyphicon-trash"></i></a></td>
        </tr>
        <?php
        $cont++;
    endforeach; 
    ?>
      </tbody>
</table>
</section>
  <aside class="der">
    
  </aside>
  <footer>
   
  </footer>
</body>
</html>