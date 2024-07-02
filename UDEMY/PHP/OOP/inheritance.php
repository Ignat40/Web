<?php 

class Cars {
    public $wheels = 4;
    public $doors = 5;
    public $color = "n/a";
    public $brand;
}

class SportsCar extends Cars {
    
    public function __construct($brand) {
        $this->brand = $brand;
    }
}

class SUV extends Cars {

}

$spotnaKolichka = new SportsCar('Ford');
echo $spotnaKolichka->wheels;
echo $spotnaKolichka->brand;