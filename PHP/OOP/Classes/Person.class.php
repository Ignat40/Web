<?php

class Person
{

private $name; 
public $height;
public $age;

public static $drinkingAge = 18;

public function __construct($name, $height, $age){
    $this->name = $name;
    $this->height = $height;
    $this->age = $age;
}

public function setNmae(string $name){
    $this->name = $name;
}

public function getName(){
    return $this->name;
}

public function getDrinkingAge(){
    return self::$drinkingAge; 
}

public static function setDrinkingAge(int $newDrinkingAge){
    self::$drinkingAge = $newDrinkingAge;
}

}


?>
