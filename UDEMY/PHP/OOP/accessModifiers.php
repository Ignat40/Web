<?php 

class Characters {
    private $_legs = 2; 
    private $_guns = 3;
    protected $type = 'Human';

    public function shoutType(){
        return 'All characters have ' . $this->_legs . 'legs and ' . $this->_guns . 'pushkala';
    }
}

class Orc extends Characters {
    protected $_type = 'Orc';

}

$orc = new Orc();
echo $orc->shoutType();