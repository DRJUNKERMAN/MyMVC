<?php
    class controladorUsuario{
          
         private $modeloUsuario;
         
         public function ejecutar(){
             
               if( $GET['act'] == 'crear' )
                   $this->crear();
               
         }
         
         private function crearModeloUsuario(){
             //obtener datos de formulario html
             $nombre = $POST['nombre'];
             $direccion = $POST['direccion'];
             $codigo = $POST['codigo'];
             $correo = $POST['correo'];
             
             $resultado = $this->modeloUsuario;
             
             if($resultado)
                 require_once 'VISTAS/vistaTemporal.php';
             else
                require_once 'VISTAS/vistaTemporal.php'
         }
         
         
         
         function __construct(){
              require_once 'MODELOS/ModeloUsuario.php';
              $this->modeloUsuario = new modeloUsuario();
         }
    
    }

?>
