<?php
    class facebook{
        //Atributos
            public $nombre;
            public $edad;
            private $pass;  //Contraseña
        //Metodos
        public function __construct($nombre, $edad, $pass){
            $this -> nombre = $nombre;
            $this -> edad = $edad;
            $this -> pass = $pass;
        }
        
        public function verInformacion(){
            echo "Nombre: " . $this -> nombre . "<br>";
            echo "Edad: " . $this -> edad . "<br>";
            self :: cambiarPass("45876577");
            echo "Password: " . $this -> pass . "<br>";
        }
        
        private function cambiarPass($pass){
            $this -> pass = $pass;
        }
    }

    $facebook = new facebook("Luis Perez", "30", "1234");
    
    //echo $facebook -> pass; No muestra el resultado por el modificador de acceso private
    //$facebook -> cambiarPass("0987"); El objeto no puede acceder metodos tipo private
    $facebook -> verInformacion();
?>