<?php

// Design Pattern MVC

// MODEL -> Takes care of the DataBase(Query, Selecting, Updating, etc.)
//          No other class is allowed to see what's going on in the DB.

// VIEW -> The view communicates with the model in order to get data and then show it to the user.

// CONTROLLER -> Get's the infromation from the the user and updates it into the database



// Creating a class 

class NewClass
{
    public $info = "This is some info";
}

class Persona
{
    protected $first_name = "Daniel";          // Access Modifiers: 
    private $last_name = "Garcia";           // Private -> Only visible in the same class
    private $age = "28";                     // Protected -> Same or inherited class could access it  

    public function owner(){
        $a = $this->first_name;
        return $a;
    }
}

class Pet extends Persona{                   // All properties and methods get access 
    public function owner(){                // From the Person class 
        $a = $this->first_name;
        return $a;
    }
}

// Instantiating a class

$object = new NewClass;
var_dump($object);
