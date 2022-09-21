
<?php include("../admin/adminHeader.php"); ?>
<?php require_once "../../controlador/adminClientes.C.php";?>
    <form method="post" accion="../controlador/registro.C.php">
        <div class="col-md-10">
            <fieldset>

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">

                        <div class="form-group">
                            <input type="hidden" name="id"  value="<?php echo $i ?>">
                            <label for="exampleInputEmail1" class="form-label mt-4">Nombre</label>
                            <input type="text" class="form-control" value="<?php echo $nom ?>" name="nombre" aria-describedby="emailHelp" placeholder="Nombre">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label mt-4">Correo</label>
                            <input type="email" class="form-control" name="correo" value="<?php echo $co ?>"placeholder="Correo">
                        </div>
                        </br>
                        <div class="form-group">Telefono Movil</label>
                            <input type="text" class="form-control" name="movil" value="<?php echo $mo ?>"placeholder="Movil">
                        </div>
                        </br>
                        <div class="form-group">Contraseña</label>
                            <input type="text" class="form-control" name="contrasenia1"value="<?php echo $co1?>" placeholder="Contraseña">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword2" class="form-label mt-4">Contraseña</label>
                            <input type="text" class="form-control" name="contrasenia2" value="<?php echo $co2 ?>"placeholder="Contraseña">
                        </div>
                        </br>
                        <button type="submit"  name="accion" value="Modificar" class="btn btn-primary">Modificar</button>
                    </div>
                </div>

            </fieldset>
        </div>
    </form>



    <div class="col-md-12">
        </br>
        </br>
        </br>
        </br>
        <div id="divSalidaDato">



            <table id="tbSalidaDato" class="table table-hover">
                <thead id="thSalidaDato" class="table-light">

                    <tr>
                        <th>ID</th>
                        <td>Nombre del Usuario</td>
                        <td>Correo</td>
                        <td>Contraseña 1</td>
                        <td>Contraseña2</td>
                        <td>Movil</td>
                        <td>Acepta Terminos</td>
                        <td>Editar</td>


                    </tr>

                </thead>

                <tbody>
                    <?php  ?>
                    <?php
                    foreach ($lista as $dato) { ?>
                        <tr>
                            <td><?php echo $dato["id"] ?></td>
                            <td><?php echo $dato["nombre"] ?></td>
                            <td><?php echo $dato["correo"] ?></td>
                            <td><?php echo $dato["contrasenia1"] ?></td>
                            <td><?php echo $dato["contrasenia2"] ?></td>
                            <td><?php echo $dato["movil"] ?></td>
                            <td><?php echo $dato["acepto"] ?></td>
                            <td>
                                <form method="post" accion="../controlador/registro.C.php">

                                    <input type="hidden" name="id" value="<?php echo $dato['id'] ?>" />
                                    <input type="submit" name="accion" value="Seleccionar" class="btn btn-info" />
                                    <input type="submit" name="accion" value="Eliminar" class="btn btn-danger" />
                                </form>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>


            </table>
        </div>

    </div>
    </div>


