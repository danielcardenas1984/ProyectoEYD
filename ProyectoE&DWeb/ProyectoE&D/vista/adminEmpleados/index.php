<?php include("../admin/adminHeader.php"); ?>
<?php require_once("../../controlador/adminEmpleados.C.php"); ?>

<h1>Registar Empleados</h1>
<br />
<div class="container">
    <div class="row">


        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" accion="../../controlador/adminProductos.C.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input type="text" readonly value="<?php echo $i; ?>" class="form-control" name="id" placeholder="Id del Trabajador">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1" class="form-label mt-4">Tipo de Documento</label>
                            <select class="form-select" name="tipo">
                                <option><?php echo $ti ?></option>
                                <option>CC</option>
                                <option>Cedula de extrajeria</option>
                            </select>
                        </div>
                        </br>

                        <div class="form-group">
                            <label for="">Digite el numero</label>
                            <input type="text" value="<?php echo $ce; ?>" class="form-control" name="cedula" placeholder="Numero">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Primer Nombre</label>
                            <input type="text" value="<?php echo $nomU ?>" class="form-control" name="primerNombre" placeholder="Primer Nonbre">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Segundo Nombre </label>
                            <input type="text" value="<?php echo $nomD ?>" class="form-control" name="segundoNombre" placeholder="Segundo Nombre">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Primer Apellido</label>
                            <input type="text" value="<?php echo $priA ?>" class="form-control" name="primerApellido" placeholder="Primer Apellido">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Segundo Apellido </label>
                            <input type="text" value="<?php echo $segA ?>" class="form-control" name="segundoApellido" placeholder="Segundo Apellido">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Direccion de Residencia</label>
                            <input type="text" value="<?php echo  $dir ?>" class="form-control" name="direccion" placeholder="Direccion de Residencia">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Departamento</label>
                            <input type="text" value="<?php echo $de ?>" class="form-control" name="departamento" placeholder="Departamento">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Localidad</label>
                            <input type="text" value="<?php echo $lo ?>" class="form-control" name="localidad" placeholder="Localidad">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1" class="form-label mt-4">Lugar</label>
                            <select class="form-select" name="lugar">
                                <option><?php echo $lu ?></option>
                                <option>Casa</option>
                                <option>Conjunto</option>
                            </select>
                        </div>
                        </BR>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefono</label>
                            <input type="text" value="<?php echo $te ?>" class="form-control" name="telefono" placeholder="Telefono">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo Electronico</label>
                            <input type="text" value="<?php echo $co ?>" class="form-control" name="correo" placeholder="Correo">
                        </div>


                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Eps</label>
                            <input type="text" value="<?php echo $e ?>" class="form-control" name="eps" placeholder="Eps">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fondo de Pensiones</label>
                            <input type="text" value="<?php echo $pe ?>" class="form-control" name="pensiones" placeholder="Fondo de Pensiones">
                        </div>
                        </br>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Foto Empleado:</label>
                            <input type="file" value="" class="form-control" name="imagen" placeholder="Imagen">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1" class="form-label mt-4">Cargo</label>
                            <select class="form-select" name="cargo">
                                <option><?php echo $car ?></option>
                                <option>Admistrador</option>
                                <option>Operario</option>
                                <option>Usuario</option>
                            </select>
                        </div>
                        </br>
                        <div class="btn-group" role="group" aria-label="">
                            <button name="accion" value="Registrar" <?php echo ($accion == "Registrar") ? "disabled" : ""; ?> type="submit" class="btn btn-primary">Agregar Empleado</button>
                            <button name="accion" value="Modificar" <?php echo ($accion == "Modoficar") ? "disabled" : ""; ?>type="submit" class="btn btn-warning">Actualizar</button>



                    </form>
                </div>

            </div>
        </div>

    </div>
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="../../componente/imgEmpleados/<?php echo $ima; ?>" alt="<?php echo $ima ?>">
            <div class="card-body">
                <h4 class="card-title">Foto Empleado</h4>

            </div>
        </div>

    </div>

    <div>
        <h1>Productos</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TIPO DOCUMENTO</th>
                    <th>CEDULA</th>
                    <th>PRIMER NOMBRE</th>
                    <th>SEGUNDO NOMBRE</th>
                    <th>PRIMER APELLIDO</th>
                    <th>SEGUNDO APELLIDO</th>
                    <th>DIRECCION</th>
                    <th>DEPARTAMENTO</th>
                    <th>LOCALIDAD</th>
                    <th>LUGAR</th>
                    <th>TELEFONO</th>
                    <th>CORREO</th>
                    <th>EPS</th>
                    <th>FONDO DE PENSIONES</th>
                    <th>CARGO</th>
                    <th>ACCION</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $Producto) { ?>
                    <tr>
                        <td><?php echo $Producto['id'] ?></td>
                        <td><?php echo $Producto['tipodocumento'] ?></td>
                        <td><?php echo $Producto['cedula'] ?></td>
                        <td><?php echo $Producto['primerNombre'] ?></td>
                        <td><?php echo $Producto['segundoNombre'] ?></td>
                        <td><?php echo $Producto['primerapellido'] ?></td>
                        <td><?php echo $Producto['segundoapellido'] ?></td>
                        <td><?php echo $Producto['direccion'] ?></td>
                        <td><?php echo $Producto['departamento'] ?></td>
                        <td><?php echo $Producto['localidad'] ?></td>
                        <td><?php echo $Producto['lugar'] ?></td>
                        <td><?php echo $Producto['telefono'] ?></td>
                        <td><?php echo $Producto['correo'] ?></td>
                        <td><?php echo $Producto['eps'] ?></td>
                        <td><?php echo $Producto['pensiones'] ?></td>
                        <td><?php echo $Producto['cargo'] ?></td>
                        <td>
                            <form method="post" accion="../../controlador/adminProductos.C.php">
                                <input type="hidden" name="id" value="<?php echo $Producto['id'] ?>" />
                                <input type="submit" name="accion" value="Seleccionar" class="btn btn-info" />
                                <input type="submit" name="accion" value="Eliminar" class="btn btn-danger" />
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>


    <?php include("../admin/adminFooter.php"); ?>