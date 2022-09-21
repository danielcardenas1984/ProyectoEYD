<?php

session_start();
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "";
$contrasenia = (isset($_POST['contrasenia'])) ? $_POST['contrasenia'] : "";

if (($usuario == "user") && ($contrasenia == "user")) {
  $_SESSION["usuario"] = "ok";
  $_SESSION["nombreUsuario"] = "Daniel";
  header("location:../adminLoguin/");
} else {

  $mensaje = "Error de Autenticacion";
}


?>

<!doctype html>
<html lang="en">

<head>
  <title>Administrador</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../componente/css/bootstrap.min (7).css">

</head>

<body>
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" data-bs-toggle="tab" href="../index/" aria-selected="true" role="tab">Regresar</a>
    </li>

  </ul>
  </br></br>

  </div>



  <div class="container">
    <div class="row">
      <div class="col-md-4">      
        
      </div>

      <div class="col-md-4">

        </br></br></br></br>
        <div class="card">

          <div class="card-header">
            Login
          </div>

          <div class="card-body">

            <div class="alert alert-danger" role="alert">

            </div>
            <form action="" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="exampleInputEmail1" placeholder="Escriba su Correo">
                <small id="emailHelp" class="form-text text-muted">Ingrese su Correo con el cual esta Registrado.</small>
              </div>

              </br>
              <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="contrasenia" id="exampleInputPassword1" placeholder="Contraseña">
              </div>
              </br>
              <button type="submit" class="btn btn-primary">Ingresar</button>

            </form>


          </div>

        </div>


      </div>
    </div>
  </div>


</body>

</html>