<?php
 require_once "../../modelo/adminClientes.M.php";
 $accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


 if(isset($accion))
 {
     switch ($accion)
     { 
         case 'Seleccionar':
            $lista = new Registro;
            $lista->setId($_POST['id']);
            $lista=$lista->Seleccionar();
            $id=$lista['id'];
            $nombre=$lista['nombre'];
            $correo=$lista['correo'];
            $movil=$lista['movil'];
            $contrasenia1=$lista['contrasenia1'];
            $contrasenia2=$lista['contrasenia2']; 
            
             
         break;

         case 'Modificar':
            $lista = new Registro;
            $lista->setId($_POST['id']);
            $lista->setNombre($_POST['nombre']);
            $lista->setCorreo($_POST['correo']);
            $lista->setContrasenia1($_POST['contrasenia1']);
            $lista->setContrasenia2($_POST['contrasenia2']);
            $lista->setMovil($_POST['movil']);           
            $lista=$lista->Modificar();
            
            
        
                   

         break;
         case 'Eliminar':                
             
                 $lista = new Registro;
                 $lista->setId($_POST['id']);                   
                 $lista=$lista->Eliminar(); 
               
                             
         break;
        

                 }
               

            } 
            
            
        $lista = new Registro;
        $lista= $lista->ConsultaTabla();
        $i = (isset($id)) ? $id :"";
        $nom = (isset($nombre)) ? $nombre :"";
        $co = (isset($correo)) ? $correo :"";
        $mo = (isset($movil)) ? $movil:"";
        $co1 = (isset($contrasenia1)) ? $contrasenia1 :"";
        $co2 = (isset($contrasenia2)) ? $contrasenia2 :"";   

?>