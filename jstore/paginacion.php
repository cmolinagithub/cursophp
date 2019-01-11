<?php
try {
  $conexion = new PDO('mysql:host=localhost; dbname=dbstore', 'cmolina', '19841984');
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion->exec("SET CHARACTER SET UTF8");

      $sql="SELECT cj_zone.zone_id 'ID', cj_country.name 'PAIS', cj_zone.name 'ESTADO', 
        cj_zone.code 'CODIGO' FROM cj_zone INNER JOIN cj_country 
        on cj_zone.country_id=cj_country.country_id where cj_zone.status=1 and cj_country.country_id =62";
  $cant_registros=7;
  //opcion inicial pildoras informatica 
  if(isset($_GET["pagina"])){
    if($_GET["pagina"]==1){
      header("Location:paginacion.php"); 
    }else{
      $pagina=$_GET["pagina"];
    }

  }else{
    //$_GET["pagina"]=1;
    $pagina=$_GET["pagina"]=1;
    
  }
  
  
  
  $empezar_desde=($pagina-1)*$cant_registros;
  $sentencia=$conexion->prepare($sql);
  $sentencia->execute(array());
  $total_registros=$sentencia->rowCount();
    

  $total_paginas=ceil($total_registros/$cant_registros);

 //echo("Total registros:  ".$total_registros. "</br>");
 //echo("Total paginas: " .$total_paginas. "</br>");
 // echo("Pagina " .$pagina. "  de  " .$total_paginas ."</br>");
//alternativa adicional bluuweb
 /* if(!$_GET){
    header("Location:paginacion.php?pagina=1");
  }
  if($_GET['pagina']>$total_paginas || $_GET['pagina'<=0])
  {
    header("Location:paginacion.php?pagina=1");
  }*/

  $sentencia->closeCursor();


  $sql_limite="SELECT cj_zone.zone_id 'ID', cj_country.name 'PAIS', cj_zone.name 'ESTADO', 
  cj_zone.code 'CODIGO' FROM cj_zone INNER JOIN cj_country 
  on cj_zone.country_id=cj_country.country_id where cj_zone.status = 1 and cj_country.country_id =62 LIMIT $empezar_desde, $cant_registros ";
  
  $sentencia=$conexion->prepare($sql_limite);
  $sentencia->execute(array());

  $array_zonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
   } catch (Exception $e) {
  die("Error " . $e->getMessage());
  echo "Linea del error " . $e->getLine();
}
//echo("Total paginas".$total_paginas);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php include("common/head.php"); ?>
</head>
<body>
  <header>
  <?php include("common/navbar.php"); ?>
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
                  <td><?php echo $zona['ID']; ?></td>
                  <td><?php echo $zona['PAIS']; ?></td>
                  <td><?php echo $zona['ESTADO']; ?></td>
                  <td><?php echo $zona['CODIGO']; ?></td>
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
        <div class="panel-footer">
        <ul class="pagination">
          <li class="page-item <?php echo $_GET['pagina']<= 1 ? 'disabled' : ''?>"><a class="page-link" href="paginacion.php?pagina=<?php echo $_GET['pagina']-1; ?>">Anterior</a></li>
          <?php for($i=0; $i<$total_paginas; $i++): ?>
          <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"><a class="page-link" href="paginacion.php?pagina=<?php echo $i+1 ?>"><?php echo $i+1 ?></a></li>
          <?php endfor ?>
          <li class="page-item <?php echo $_GET['pagina']>= $total_paginas ? 'disabled' : ''?>"><a class="page-link" href="paginacion.php?pagina=<?php echo $_GET['pagina']+1; ?>">Siguiente</a></li>
        </ul>

        </div>
      </div>

  </div>
  </section>
  <aside class="der"></aside>
  <div class="footer">
<?php include("common/footer.php"); ?>
</div>
</body>
</html>