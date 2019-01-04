<!doctype html>
<html lang="es">
  <head>
    <title>Zonas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/css/main.css" >

  </head>
  <body>

      <div class="card">
          <div class="card-header">
          <div class="row">
            <div class="col"></div>
            <div class="col">Grupo</div>
            <div class="col">Usuario</div>
            <div class="col">Nombre</div>
            <div class="col">Apellido</div>
            <div class="col">Correo</div>
            <div class="col">Codigo</div>
            <div class="col">Estado</div>
            <div class="col">Fecha Creaccion</div>
        </div>
          </div>
            <?php
            foreach ($arrayuser as $resul) { ?>
        <div class="row">
            <div class="col"><?php echo $resul["user_id"]; ?></div>
            <div class="col"><?php echo $resul["user_group_id"]; ?></div>
            <div class="col"><?php echo $resul["username"]; ?></div>
            <div class="col"><?php echo $resul["firstname"]; ?></div>
            <div class="col"><?php echo $resul["lastname"]; ?></div>
            <div class="col"><?php echo $resul["email"]; ?></div>
            <div class="col"><?php echo $resul["code"]; ?></div>
            <div class="col"><?php echo $resul["status"]; ?></div>
            <div class="col"><?php echo $resul["date_added"]; ?></div>

        </div>
        <?php 
    } ?>      
              
          </div>
          <div class="card-footer text-muted">
              Este es un pie de pagina 
          </div>
      </div>

      

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
