<?php

class Calc
{
    public $operation;
    public $num1;
    public $num2;

    function __construct(string $operation, int $num1, int $num2)
    {
        $this->operation = $operation;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculator()
    {
        switch ($this->operation) {
            case "add":
                return $this->num1 + $this->num2;
            case "sub":
                return $this->num1 - $this->num2;
            case "multi":
                return $this->num1 * $this->num2;
            case "div":
                return $this->num1 / $this->num2;
            default:
                return "Doesn't have that functionality just yet!";
        }
    }
}

?>
