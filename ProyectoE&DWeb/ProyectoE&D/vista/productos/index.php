<?php require "../templates/header.php"; ?>
<?php require "../../controlador/adminProductos.C.php"; ?>

<div class="jumbotron" margin:auto>
  <h1 class="display-3" text-align:center;>Estos son nuestros productos</h1>
  <p class="text-warning">Aqui trabajamos para ti crea tus productos y compite!!!!</p>
  <hr class="my-2">

</div>

<?php foreach ($lista as $Producto) { ?>
  <div class="col-md-3">
    <div class="card border-secondary">


      <img class="card-img-top" src="../../componente/img/<?php echo $Producto['Imagen']; ?>"" alt=" <?php echo $Producto['Imagen']; ?>">
      <div class="card-body">
        <h4 class="text-warning"><?php echo $Producto['producto']; ?></h4>
        <p class="text-success"><?php echo $Producto['precio']; ?></p>
       
      </div>

    </div>
  </div>
<?php } ?>





<?php require "../templates/footer.php"; ?>