<?php
require_once "../../modelo/adminProductos.M.php";


$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


if (isset($accion)) {
   switch ($accion) {
      case 'Seleccionar':
         $lista = new Registro;
         $lista->setId($_POST['id']);
         $lista = $lista->Seleccionar();
         $id = $lista['id'];
         $producto = $lista['producto'];
         $cantidad = $lista['cantidad'];
         $unidad = $lista['unidad'];
         $precio = $lista['precio'];
         $imagen = $lista['Imagen'];


         break;

      case 'Modificar':
         $lista = new Registro;
         $lista->setId($_POST['id']);
         $lista->setProducto($_POST['producto']);
         $lista->setCantidad($_POST['cantidad']);
         $lista->setUnidad($_POST['unidad']);
         $lista->setPrecio($_POST['precio']);
         $lista = $lista->Modificar();
         header("Location:http://localhost/ProyectoE&D/vista/adminProductos/");
         break;
      case 'Eliminar':

         $lista = new Registro;
         $lista->setId($_POST['id']);
         $lista = $lista->Eliminar();
         header("Location:http://localhost/ProyectoE&D/vista/adminProductos/");
         break;

      case 'Registrar':
         $lista = new Registro;
         $lista->setId($_POST['id']);
         $lista->setProducto($_POST['producto']);
         $lista->setCantidad($_POST['cantidad']);
         $lista->setUnidad($_POST['unidad']);
         $lista->setPrecio($_POST['precio']);
         $lista = $lista->Registrar();
         header("Location:http://localhost/ProyectoE&D/vista/adminProductos/");

         break;
   }
}


$lista = new Registro;
$lista = $lista->ConsultaTabla();
$i = (isset($id)) ? $id : "";
$pro = (isset($producto)) ? $producto : "";
$uni = (isset($unidad)) ? $unidad : "Seleccione....";
$can = (isset($cantidad)) ? $cantidad : "";
$pre = (isset($precio)) ? $precio : "";
$ima = (isset($imagen)) ? $imagen : "";
