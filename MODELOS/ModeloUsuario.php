<?php

    class modeloUsuario{
        //private datos
            private $nombre, $direccion, $codigo, $correo;
            
            
        public function crear($nombre,$direccion,$codigo,$correo){
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->codigo = $codigo;
            $this->correo = $correo;
        }  
        
        function __construct(){
        
        
        }
    
    
    }
    

?>
