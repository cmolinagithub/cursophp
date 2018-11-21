<?php
require "procesar_usuario.php";

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

      <form action="/action_page.php">
      
      <div class="form-row">
            <div class="form-group col-md-3">
              <label for="tipo">Tipo</label>
              <input type="text" class="form-control" id="tipo" name="tipo" placeholder="IN, EX, TM">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4">Tipo Identificación</label>
              <input type="text" class="form-control" id="tipo_identificacion" name="tipo_identificacion" placeholder="CI, RUC, DNI">
            </div>
            <div class="form-group col-md-3">
              <label for="numero_identificacion">Numero Identificacion</label>
              <input type="text" class="form-control" id="numero_identificacion" name="numero_identificacion">
            </div>
            <div class="form-group col-md-3">
              <label for="Username">Username</label>
              <input type="text" class="form-control" id="Username" placeholder="8 dijitos">
            </div>
            <div class="form-group col-md-3">
              <label for="Username">Username</label>
              <input type="text" class="form-control" id="Username" placeholder="8 dijitos">
            </div>
          </div>
      
      
      
      
      
      
      
      
          <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
        </div>
      
      
        <div class="form-group row">
          <label for="tipo">Tipo Usuario:</label> 
          <input type="text"class="form-control" name="tipo" placeholder="IN, EX, TM">
        </div>
        
        <div class="form-group">
          <label for="tipo_identificacion">Tipo Identificacion:</label> 
          <input type="text"class="form-control" name="tipo_identificacion" placeholder="CI, RUC, DNI">
        </div>
        
        <div class="form-group">
          <label for="email">Email address:</label> <input type="email"
            class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label> <input type="password"
            class="form-control" id="pwd">
        </div>
        <div class="form-group form-check">
          <label class="form-check-label"> <input
            class="form-check-input" type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>


  </section>
  <aside class="der"></aside>
  <div class="footer">
<?php include("common/footer.php");?>
</div>
</body>
</html>