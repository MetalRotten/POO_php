<?php
    class persona{
        
        //Atributos
        public $nombre="Pedro";
        
        //Metodos
        public function hablar($mensaje){
            echo $mensaje;
        }
    }

    $persona = new persona();
    //echo $persona->nombre;
    $persona->hablar("Saludos desde México");
?>