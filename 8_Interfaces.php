<?php
    interface Automovil{
        //Metodos
        public function encender();
        public function apagar();
    }

    interface gasolina extends Automovil{
        //Metodos
        public function vaciarTanque();
        public function llenarTanque($cant);
    }

    class Deportivo implements gasolina{
        
        //ATributos
        private $estado = false;
        private $tanque = 0;
        //Metodos
        
        public function estado(){
            if($this->estado){ 
                print "El auto esta encendido y tiene ". $this->tanque. " litros en el tanque.<br>";
            }else{
                print "El auto esta apagado.<br>";
            }
        }
        
        public function encender(){
            if($this->estado){
                print "No puedes encender el auto 2 veces.<br>";
            }else{
                if($this->tanque <= 0){
                    print "Tanque vacio, El auto no se puede encender.<br>";    
                }else{
                    print "Auto encendido.<br>";
                    $this->estado = true;
                }
            }
        }
        
        public function apagar(){
            if($this->estado){
                print "Auto apagado.<br>";
                    $this->estado = false;
            }else{
                print "El auto ya estaba apagado. <br>";
                    
            }
        }
        
        public function vaciarTanque(){
            $this->tanque = 0;
        }
        
        public function llenarTanque($cant){
            $this -> tanque = $cant;
        }
        
        public function usar($km){
            if($this->estado){
                $reducir = $km/3;
                $this -> tanque = $this->tanque - $reducir;
                if($this->tanque <= 0 ){
                    $this -> estado=false;
                }
            }else{
                print "El auto esta apagado y no se puede usar. <br>";
            }
        }
    }

    $obj = new Deportivo();
    $obj -> llenarTanque(1000);
    $obj -> encender();
    $obj -> usar(11320);
    $obj -> estado();
?>