<?php
class pagina{
    //Atributos
    public $nombre = "Código Facilito";
    public static $url = "codigofacilito.com";
    
    //Metodos
    public function bienvenida(){
        echo "Bienvenidos a <b>" . $this->nombre . "</b> la página es <b>" . self::$url . "</b><br>";
    }
}

$pagina = new pagina();

$pagina -> bienvenida();
?>