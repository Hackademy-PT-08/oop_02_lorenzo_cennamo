<?php

class Vertebrates {
    protected function vertebrates() {
        echo "Sono un animale vertebrato \n";
    }
}

class WarmBlooded extends Vertebrates {
    protected function warmBlooded(){
        echo "Sono un animale a sangue caldo \n";
    }
}

class ColdBlooded extends Vertebrates { 
    protected function coldBlooded(){
        echo "Sono un animale a sague freddo \n";
    }
}

class Mammals extends WarmBlooded {
    protected function mammals(){
        echo "Sono un Mammifero \n";
    }

    public function __construct(){
        parent::vertebrates();
        parent::warmBlooded();
        $this->mammals();
    }
}


class Birds extends WarmBlooded {
    protected function birds(){
        echo "Sono un Uccello \n";
    }

    public function __construct(){
        parent::vertebrates();
        parent::warmBlooded();
        $this->birds();
    }
}

class Fish extends ColdBlooded {
    protected function fish(){
        echo "Sono un Pesce \n";
    }

    public function __construct(){
        parent::vertebrates();
        parent::coldBlooded();
        $this->fish();
    }
}

class Reptiles extends ColdBlooded {
    protected function reptiles(){
        echo "Sono un Rettile \n";
    }

    public function __construct(){
        parent::vertebrates();
        parent::coldBlooded();
        $this->reptiles();
    }
}

class Amphibians extends Coldblooded {
    protected function amphibians(){
        echo "Sono u Anfibio \n";
    }

    public function __construct(){
        parent::vertebrates();
        parent::coldBlooded();
        $this->amphibians();
    }
}

$cane = new Mammals();
$piccioe = new Birds();
$salmone = new Fish();
$coccodrillo = new Reptiles();
$rana = new Amphibians();