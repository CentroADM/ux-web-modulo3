<?php
class Rectangulo{
    private $base;
    private $altura;

    public function __construct(int $b , int $a){
        $this->base = $b;
        $this->altura = $a;
    }
    
    public function area(){
        return $this->base * $this->altura;
    }

    public function getBase(){
        return $this->base;
    }

    public function getAltura(){
        return $this->altura;
    }
}


class Cuadrado extends Rectangulo {
    
    public function __construct(int $lado){
        parent::__construct($lado,$lado);
    }
}
//$rectangulo = new Rectangulo(2,6);
//echo $rectangulo->area();
$cuadrado = new Cuadrado(2);
echo $cuadrado->area() . "\n";