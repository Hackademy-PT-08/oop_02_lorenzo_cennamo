<?php

class Car {
    private $num_telaio;
    public function __construct($telaio){
    $this->num_telaio=$telaio;
    }

    public function showChassis(){
        return $this->num_telaio;
    }
    
}
      
class Fiat extends Car {
    
    protected $license;
    protected $color;
    
    public function __construct($telaio, $license, $color){
        parent::__construct($telaio);
        $this->license=$license;
        $this->color=$color;
    }
    
    public function dataInfo(){
        echo "La mia macchina è $this->license, con targa $this->color e numero di Telaio " . $this->showChassis();
    }
        
}
    
    
    $car= new Fiat(123456, "Fiat Panda", "AA 123 BB");
    $car->dataInfo();