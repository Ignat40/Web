<?php

Class User {
    public $name = 'Johnas';
    
    public function shoutName(){
        echo $this->name;
    }
}

$user->shoutName();

?>

