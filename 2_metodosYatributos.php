<?php
    class Persona{
        
        //Atributos
        public $nombre = array();
        public $apellido = array();
        
        //Metodos
        public function mostrar(){
            for($i=0; $i<count($this->nombre); $i++){
                self::formato($this->nombre[$i], $this->apellido[$i]);
            }
        }
        
        public function guardar($nombre, $apellido){
            $this->nombre[]=$nombre;
            $this->apellido[]=$apellido;
        }
        
        public function formato($nombre, $apellido){
            echo "Nombre:   ".$nombre."   |   Apellido:    ".$apellido."<br>";
        }
    }

    //Instanciar Objeto de la clase
    $persona = new Persona;
    $persona->guardar("Carlos", "Fernandes");
    $persona->guardar("Uriel", "Hernandez");
    $persona->mostrar();

    
//Prueba de segundo commit
    

?>