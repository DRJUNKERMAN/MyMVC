<?php

     class vehiculo{
     
         private $modeloVehiculo;
         
         public function ejecutar( ){
             
             if( $_GET['act'] == 'crear' )
                 $this->crear();
                 
             
         }
         
         private function crear( )
         {
             $marca = $_POST['marca'];
             $modelo = $_POST['modelo'];
             $año = $_POST['año'];
             $precio = $_POST['precio'];
             
             $resultado = $this->modelo->crear($marca,$modelo,$año,$precio);
             
             if( $resultado )
                 require_once 'VISTAS/vistaTemporal.php';
             else
                 require_once 'VISTAS/vistaTemporal.php';
         }
         
         function __construct()
         {
             require_once 'MODELOS/ModeloVehiculo.php';
             $this->modeloVehiculo = new modeloVehiculo();
         }
         
         
     
     }
    




?>
