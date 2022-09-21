<?php include("../admin/adminHeader.php"); ?>
<?php require_once("../../controlador/adminProductos.C.php"); ?>

<h1>Inventario de Productos</h1>
<br />
<div class="container">
    <div class="row">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Ingreso de Producto
                </div>
                <div class="card-body">
                    <form method="POST" accion="../../controlador/adminProductos.C.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input type="text" readonly value="<?php echo $i; ?>" class="form-control" name="id" placeholder="Id del Producto">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Producto</label>
                            <input type="text" value="<?php echo $pro ?>" class="form-control" name="producto" placeholder="Nombre del producto">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cantidad</label>
                            <input type="text" value="<?php echo  $can ?>" class="form-control" name="cantidad" id="Producto" placeholder="Cantidad">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1" class="form-label mt-4">Unidad de Medida</label>
                            <select class="form-select" name="unidad">
                                <option><?php echo $uni ?></option>
                                <option>Unidad</option>
                                <option>Bulto</option>
                                <option>Kilo</option>
                                <option>Libra</option>
                                <option>Botella</option>
                                <option>Ampolleta</option>
                            </select>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Precio</label>
                            <input type="text" value="<?php echo  $pre ?>" class="form-control" name="precio" placeholder="Precio">
                        </div>
                        <div class="form-group">


                            <label for="exampleInputEmail1">Imagen del Producto :</label>
                            </br>
                            </br>
                            <input type="file" value="" class="form-control" name="imagen" placeholder="Imagen del producto">
                        </div>
                        </br>
                        <div class="btn-group" role="group" aria-label="">
                            <button name="accion" value="Registrar" <?php echo ($accion == "Registrar") ? "disabled" : ""; ?> type="submit" class="btn btn-primary">Agregar Producto</button>
                            <button name="accion" value="Modificar" <?php echo ($accion == "Modoficar") ? "disabled" : ""; ?>type="submit" class="btn btn-warning">Actualizar</button>



                    </form>
                </div>

            </div>
        </div>

    </div>
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="../../componente/img/<?php echo $ima; ?>" alt="<?php echo $ima ?>">
            <div class="card-body">
                <h4 class="card-title">Imagen del Producto</h4>
                
            </div>
        </div>

    </div>
    <div>
        <h1>Productos</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>UNIDAD DE MEDIDA</th>
                    <th>PRECIO</th>
                    <th>IMAGEN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $Producto) { ?>
                    <tr>
                        <td><?php echo $Producto['id'] ?></td>
                        <td><?php echo $Producto['producto'] ?></td>
                        <td><?php echo $Producto['cantidad'] ?></td>
                        <td><?php echo $Producto['unidad'] ?></td>
                        <td><?php echo $Producto['precio'] ?></td>
                        <td><?php echo $Producto['Imagen'] ?></td>
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