<?php require "../templates/header.php" ?>



</br>
<h1>Registrate Ahora!!!!</h1>
</br>
</br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
              
                <div class="card-body">
                    <form action="../../controlador/registroCliente.C.php" method="post">

                        </br>
                        <div class="form-group">
                            <input type="hidden" value="" class="form-control" name="id" placeholder="id">
                            <label for="exampleInputEmail1">Ingresa tu Nombre</label>
                            <input type="text" value="" class="form-control" name="nombre" placeholder="Ingresa tu Nombre">
                        </div>

                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo</label>
                            <input type="text" value="" class="form-control" name="correo" placeholder="Correo">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefono</label>
                            <input type="text" value="" class="form-control" name="movil" placeholder="Telefono">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contraseña</label>
                            <input type="password" value="" class="form-control" name="contrasenia1" placeholder="Ingresa tu Contrasenia">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Vuelve a escribir tu Contraseña</label>
                            <input type="password" value="" class="form-control" name="contrasenia2" placeholder="Escribe de nuevo tu contrasenia">
                        </div>
                        </br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="si" name="acepto" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>
                        </div>
                        </br>

                        <div class="btn-group" role="group" aria-label="">
                            <button name="accion" value="Registrar" type="submit" class="btn btn-secondary">Registrate ahora Es Gratis!!!!</button>
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require "../templates/footer.php" ?>