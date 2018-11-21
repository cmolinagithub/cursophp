<?php
require "procesar_usuario.php";
$usuarios = new ProcesarUsuario();
$array_usuarios = $usuarios->getUsuario();
$cont = 1;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php include("common/head.php");?>
</head>
<body>
  <header>
  <?php include("common/navbar.php");?>
 </header>
  <section>
 
   <div class="container">

      <div class="panel panel-default">
      <div class="panel-heading">
               
       
      </div>
        <div class="panel-body">
              <nav class="navbar navbar-light bg-light justify-content-between">
              <a class="navbar-brand">Usuario / Departamento</a>
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Usuario o Departamento" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="button">Agregar Usuario</button>
              </form>
             </nav>
          <div class="table-responsive1">
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <!--<td>Usuario</td>-->
                  <!--<td>Tipo Iden</td>-->
                  <th>CI/RUC</th>
                  <th>Nombres</th>
                  <th>Codigo</th>
                  <th>Telefono</th>
                  <th>Celular</th>
                  <th>Correo</th>
                  <!--<td>profesion</td>-->
                  <!--td>actividades</td>-->
                  <th>Departamento</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
          
    <?php

foreach ($array_usuarios as $usuario) {
        ?>
        <tr>
                  <td><?php echo $cont;?></td>
                  <!--<td><?php //echo $usuario['tipo'];?></td>-->
                  <!--<td><?php //echo $usuario['tipo_identificacion'];?></td>-->
                  <td><?php echo $usuario['numero_identificacion'];?></td>
                  <td><?php echo $usuario['nombres']." ".$usuario['apellidos'];?></td>
                  <td><?php echo $usuario['codigo'];?></td>
                  <td><?php echo $usuario['telefono1'];?></td>
                  <td><?php echo $usuario['celular1'];?></td>
                  <td><?php echo $usuario['email1'];?></td>
                  <!--<td><?php //echo $usuario['profesion'];?></td>-->
                  <!--<td><?php //echo $usuario['actividades'];?></td>-->
                  <td><?php echo $usuario['rol'];?></td>

                  <td>
                  <div class="btn-group btn-group-sm">
                   
                  <a href="" title="Ver"><button type="button"
                        class="btn btn-default"><i class="far fa-eye"></i></button></a>
                    <a href="" title="Editar"><button type="button"
                        class="btn btn-default"><i class="fas fa-edit"></i></button></a>
                    <a href="" title="Eliminar"><button type="button"
                        class="btn btn-default"><i class="fas fa-eraser"></i></button></a>
                     </div>  
                    </td>

                </tr>
        <?php
        $cont++;
    } 
    ?>
      </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
  </section>
  <aside class="der"></aside>
  <div class="footer">
<?php include("common/footer.php");?>
</div>
</body>
</html>