<?php 

class User {
    protected $name; 
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }

    public function set_name($new_name){
        $this->name = $new_name;
    }
}

$user1 = new User("Ivan");

$user1->set_name("Petar");
echo $user1->get_name();

