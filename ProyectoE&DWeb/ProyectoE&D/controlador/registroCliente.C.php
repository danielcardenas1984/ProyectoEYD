<?php
require_once "../modelo/registroCliente.M.php";


$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
if (isset($accion)) {
        switch ($accion) {
                case 'Registrar':
                       
                        $lista = new Registro;
                        $lista->setId($_POST['id']);
                        $lista->setNombre($_POST['nombre']);
                        $lista->setCorreo($_POST['correo']);
                        $lista->setContrasenia1($_POST['contrasenia1']);
                        $lista->setContrasenia2($_POST['contrasenia2']);
                        $lista->setMovil($_POST['movil']);
                        $lista->setAcepto($_POST['acepto']);
                        $lista = $lista->Registrar();
                        header ("location:http://localhost/ProyectoE&D/vista/registro/");
                        
                        break;
        }


        
        //echo $men=($mensaje);
}       //header ("location:http://localhost/ProyectoE&D/vista/registro/");
        
?>
