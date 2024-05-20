<?php 
    echo "I like pizza";

    //To declare a varaible we use $
    $name = "Ignatcho";
    $food = "pizza";

    $age = 21;
    $gpa = 2.5;

    $employed = true;
    $offlie = false;

    echo "Hello {$name}<br>";
    echo "You like {$food}<br>";
    echo "You are {$age}<br>";
    echo "You have {$gpa} gpa<br>";
    echo "Online status: {$online}<br>";

    // Arithmetic Operators

    $x = 10;
    $y = 4;
    $z = null;

    $z = $y + $x;
    $z = $y - $x;
    $z = $y * $x;
    $z = $y / $x;
    $z = $y ** $x;
    $z = $y % $x;

    echo $z;

    echo "<br>";

    // Increment / Decrement 

    $counter = 0; 

    $counter++;
    echo "Increase by 1: {$counter}<br>";

    $counter -= 3;
    echo "Decrease by X: {$counter}<br>";

    //  Operator Precedence 
    // 1. ()
    // 2. **
    // 3. * / %
    // 4. + / - 

    echo "<br>";

    // Arrays -> holds more than one value at a time 

    $food1 = "apple";
    $food2 = "banana";
    $food3 = "pineapple";
    $food4 = "lemon";

    $foodsArr = array("bread","pancakes","peanutbutter","idk");

    // Print a single Item
    echo $foodsArr[0] . "<br>";
    echo $foodsArr[1] . "<br>";
    echo $foodsArr[2] . "<br>";
    echo $foodsArr[3] . "<br>";

    //Change Items
    $foodsArr[2] = $food2;

    // Array functions 
    array_push($foodsArr, "pineapple");//adds el at the back of the arr
    array_pop($foodsArr);//removes last el in arr
    array_shift($foodsArr);//removes the first el and shifts the other
    $reversed_array = array_reverse($foodsArr);
    echo count($foodsArr) ."<br>";

    foreach($foodsArr as $food){
        echo $food ."<br>";
    }

    echo "<br>";

    // Associative array -> array made of key/value pairs
    // Basically a dictionary dude 

    // countires -> capitals
    // id -> username 
    // item -> price 

    $capitals = array("USA" => "Washington D.C." , 
                      "Japan" => "Tokyo", 
                      "India" => "New Delhi", 
                      "Bulgaria" => "Sofia");

    echo $capitals['Bulgaria'] . "<br>"; // prints the capital

    //Functions connected with Associtative array
    $capitals['USA'] = 'Las Vegas';
    $capitals['Denmark'] = 'Copenhagen'; // adds at the end of the array
    array_pop(($capitals));
    array_shift($capitals);
    $keys = array_keys($capitals);
    $values = array_values($capitals);
    $capitals = array_flip($capitals);
    $capitals = array_reverse($capitals);

    foreach($capitals as $key => $value ){
        echo "{$key} = {$value} <br>";
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>Order Pizza</button>
</body>
</html>