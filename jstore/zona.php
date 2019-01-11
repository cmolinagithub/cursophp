<?php
require "procesar_zona.php"; 
$zonas = new ProcesarZona(); 
$array_zonas=$zonas->getZona();
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
              <a class="navbar-brand">ESTADO / PROVINCIA</a>
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Pais / Provincia" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                <a class="btn btn-primary" href="ingresar_zona.php" role="button">Agregar</a>
              </form>
             </nav>
          <div class="table-responsive1">
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>PAIS</th>
                  <th>ESTADO/PROVINCIA</th>
                  <th>CODIGO</th>
                  <th>OPCION</th>
               </tr>
              </thead>
              <tbody>
          
    <?php

foreach ($array_zonas as $zona) {
        ?>
        <tr>
                  <td><?php echo $zona['ID'];?></td>
                  <td><?php echo $zona['PAIS'];?></td>
                  <td><?php echo $zona['ESTADO'];?></td>
                  <td><?php echo $zona['CODIGO'];?></td>
                  <td>
                  <div class="btn-group btn-group-sm">
                   
                  <a href="https://api.whatsapp.com/send?phone=593994284596" title="Ver"><button type="button"
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