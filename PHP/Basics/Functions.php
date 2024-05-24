<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 

    function happy_bday ($name) {
        echo "Happy birthday {$name}!<br>";
    }

    function hypotenuse($side_a, $side_b){
        return sqrt($side_a**2 + $side_b**2);
    }
    
    echo "H -> " . hypotenuse(3, 4);
    
    // Usefull functions 

    $username = "Peanut";
    $phonenumber = "123-456-789";

    $username = strtolower($username);
    $username = strtoupper($username);
    $username = trim($username); // removes white space before and after
    $username = str_pad($username, 20, "0"); // fills the maximum 20 chars with 0s
    $phonenumber = str_replace("-", " ", $phonenumber); //chagnes - with empty space 
    $username = strrev($username); // reverse
    $equals = strcmp($username, "SomeString");
    $length = strlen($phonenumber);
    $index = strpos($phonenumber, "-"); // returns position of the character
    $firstname = substr($username, 0, 3);
    

?>