<!doctype html>
<html lang="es">

<head>
    <title>Usuario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <link rel="stylesheet" href="vista/css/main.css">

</head>

<body>

<section>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>CRUD <span class="small"> Create, Read, Update and Delete</span> </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Grupo</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Codigo</th>
                            <th>Estado</th>
                            <th>Fecha Creaccion</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
            //echo ("Total user: ".$total_user);
            foreach ($arrayuser as $resul) { ?>

            <tr>
                <td><?php echo $resul["user_id"]; ?></td>
                <td><?php echo $resul["user_group_id"]; ?></td>
                <td><?php echo $resul["username"]; ?></td>
                <td><?php echo $resul["firstname"]; ?></td>
                <td><?php echo $resul["lastname"]; ?></td>
                <td><?php echo $resul["email"]; ?></td>
                <td><?php echo $resul["code"]; ?></td>
                <td><?php echo $resul["status"]; ?></td>
                <td><?php echo $resul["date_added"]; ?></td>
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
        } ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted">
            <ul class="pagination">
                <li class="page-item <?php echo $_GET['pagina']<= 1 ? 'disabled' : ''?>"><a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']-1; ?>">Anterior</a></li>
                <?php for($i=0; $i<$total_paginas; $i++): ?>
                <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"><a class="page-link" href="index.php?pagina=<?php echo $i+1 ?>"><?php echo $i+1 ?></a></li>
                <?php endfor ?>
                <li class="page-item <?php echo $_GET['pagina']>= $total_paginas ? 'disabled' : ''?>"><a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']+1; ?>">Siguiente</a></li>
            </ul>
            </div>
        </div>
    
    </div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>