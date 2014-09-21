<?php

    class ModeloVehiculo{
      //private datos
      private $marca, $modelo, $año, $precio;
      
       public function create($marca, $modelo, $año, $precio){
           $this->marca = $marca;
           $this->modelo = $modelo;
           $this->año = $año;
           $this->precio = $precio;
       }
       
       function __construct(){
       
       
       }
    
    }

?>
