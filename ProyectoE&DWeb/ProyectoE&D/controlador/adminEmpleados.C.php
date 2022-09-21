<?php
require_once "../../modelo/adminEmpleados.M.php";
//echo $id=$_POST['id'];
//echo $accion=$_POST['accion'];

$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


if (isset($accion)) {
   switch ($accion) {
      case 'Seleccionar':
         $lista = new Registro;
         $lista->setId($_POST['id']);
         $lista = $lista->Seleccionar();
         $id = $lista['id'];
         $tipo = $lista['tipodocumento'];
         $cedula = $lista['cedula'];
         $primerNombre = $lista['primerNombre'];
         $segundoNombre = $lista['segundoNombre'];
         $primerApellido = $lista['primerapellido'];
         $segundoApellido = $lista['segundoapellido'];
         $direccion = $lista['direccion'];
         $departamento = $lista['departamento'];
         $localidad = $lista['localidad'];
         $lugar = $lista['lugar'];
         $telefono = $lista['telefono'];
         $correo = $lista['correo'];
         $eps = $lista['eps'];
         $pensiones = $lista['pensiones'];
         $cargo = $lista['cargo'];
         $imagen=$lista['imagen'];

         break;

      case 'Modificar':
         $lista = new Registro;
         $lista->setId($_POST['id']);
         $lista->setTipoDocumento($_POST['tipo']);
         $lista->setCedula($_POST['cedula']);
         $lista->setPrimerNombre($_POST['primerNombre']);
         $lista->setSegundoNombre($_POST['segundoNombre']);
         $lista->setPrimerApellido($_POST['primerApellido']);
         $lista->setSegundoApellido($_POST['segundoApellido']);
         $lista->setDireccion($_POST['direccion']);
         $lista->setDepartamento($_POST['departamento']);
         $lista->setLocalidad($_POST['localidad']);
         $lista->setLugar($_POST['lugar']);
         $lista->setTelefono($_POST['telefono']);
         $lista->setCorreo($_POST['correo']);
         $lista->setEps($_POST['eps']);
         $lista->setPensiones($_POST['pensiones']);
         $lista->setCargo($_POST['cargo']);
         $lista = $lista->Modificar();
         header("Location:http://localhost/ProyectoE&D/vista/adminEmpleados/");
         break;
      case 'Eliminar':

         $lista = new Registro;
         $lista->setId($_POST['id']);
         $lista = $lista->Eliminar();
         header("Location:http://localhost/ProyectoE&D/vista/adminEmpleados/");
         break;

      case 'Registrar':
         $lista = new Registro;
         $lista->setTipoDocumento($_POST['tipo']);
         $lista->setCedula($_POST['cedula']);
         $lista->setPrimerNombre($_POST['primerNombre']);
         $lista->setSegundoNombre($_POST['segundoNombre']);
         $lista->setPrimerApellido($_POST['primerApellido']);
         $lista->setSegundoApellido($_POST['segundoApellido']);
         $lista->setDireccion($_POST['direccion']);
         $lista->setDepartamento($_POST['departamento']);
         $lista->setLocalidad($_POST['localidad']);
         $lista->setLugar($_POST['lugar']);
         $lista->setTelefono($_POST['telefono']);
         $lista->setCorreo($_POST['correo']);
         $lista->setEps($_POST['eps']);
         $lista->setPensiones($_POST['pensiones']);
         $lista->setCargo($_POST['cargo']);
         $lista = $lista->Registrar();
         header("Location:http://localhost/ProyectoE&D/vista/adminEmpleados/");

         break;
   }
}


$lista = new Registro;
$lista = $lista->ConsultaTabla();
$i = (isset($id)) ? $id : "";
$ti = (isset($tipo)) ? $tipo : "Seleccione....";
$ce = (isset($cedula)) ? $cedula : "";
$nomU = (isset($primerNombre)) ? $primerNombre : "";
$nomD = (isset($segundoNombre)) ? $segundoNombre : "";
$priA = (isset($primerApellido)) ? $primerApellido : "";
$segA = (isset($segundoApellido)) ? $segundoApellido : "";
$dir = (isset($direccion)) ? $direccion : "";
$de = (isset($departamento)) ? $departamento : "";
$lo = (isset($localidad)) ? $localidad : "";
$lu = (isset($lugar)) ? $lugar : "";
$i = (isset($id)) ? $id : "";
$te = (isset($telefono)) ? $telefono : "";
$co = (isset($correo)) ? $correo : "";
$e = (isset($eps)) ? $eps : "";
$i = (isset($id)) ? $id : "";
$pe = (isset($pensiones)) ? $pensiones : "";
$car = (isset($cargo)) ? $cargo : "Seleccione....";
$ima = (isset($imagen)) ? $imagen : "";
