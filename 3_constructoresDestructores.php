<?php
    class loteria{
        //Atributos
            public $numero;
            public $intentos;
            public $resultado = false;
        //Metodos
            public function __construct($numero, $intentos){
                $this->numero=$numero;
                $this->intentos=$intentos;
            }
        
            public function sortear(){
                $minimo = $this->numero/2;
                $maximo = $this->numero*2;
                for($i = 0; $i < $this->intentos; $i++){
                    $int = rand($minimo, $maximo);
                    $giro = $i;
                    self::intentos($int, $giro);
                }
                
            }
        
            public function intentos($int, $giro){
                if($int == $this->numero){
                    echo "<b>" . $int . " == " . $this->numero . " Ganador! </b><br>";
                    $this->resultado=true;
                    $this->giro=$giro+1;
                }else{
                    echo $int . " != " . $this->numero . "</b><br>";
                }
            }
        
            public function __destruct(){
                if($this->resultado){
                    echo "Felicidades, has acertado en el intento número " . $this->giro;
                }else{
                    echo "Que lastimas, has perdido en " . $this->intentos . " intentos";
                }
            }
    }

    $loteria = new loteria(10,5);
    $loteria->sortear();


?>