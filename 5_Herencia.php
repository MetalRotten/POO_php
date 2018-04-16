<?php
    class vehiculo{
        //Atributos
            public $motor = false;
            public $marca;
            public $color;
        //Metodos
        public function estado(){
            if($this->motor){
                echo "El motor esta encendido <br>";
            }else{
                echo "El motor esta apagado <br>";
            }
        }
        
        public function encender(){
            if($this->motor){
                echo "Cuidado! El motor ya esta enncendido <br>";
            }else{
                echo "El motor ahora esta encendido <br>";
                $this->motor=true;
            }
        }
    }

    class moto extends vehiculo{
        public function apagarMoto(){
            if($this -> motor){
                echo "El motor ahora esta apagado <br>";
            }else{
                echo "Hey! El motor ya esta pagado <br>";
            }
        }
    }

    $vehiculo = new vehiculo();

    $moto = new moto();
    $moto -> estado();
    $moto -> encender();
    $moto -> apagarMoto();

?>