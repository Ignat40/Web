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

    $age = 0;

    if ($age >= 18 ) {
        echo"You may enter the website";
    }
    elseif ($age <= 0) {
        echo "You are just a baby!";
    }
    elseif ($age >= 100) {
        echo "You are too old to enter the WebSite!";
    }
    else {
        echo "You man not enter the website ";
    }


    //Conditional operations

    $temp = 25;
    $cloudy = true;

    if ($temp >= 10 && $temp <= 30){
        echo "The weather is nice";
    }
    elseif( $temp < 0 || $temp > 40){
        echo "The wearhter is bad";
    }
    elseif($temp < 20 and $cloudy){
        echo "The weather is chillie";
    }
    else {
        echo "IDK";
    }

    // Switch statements 

    echo "<br>";

    $grade = "B";

    switch ($grade) {
        case "A":
            echo "You did great!";
            break;
        case "B":
            echo "You did well!";
            break;
        case "C":
            echo "You did okay!";
            break;
        case "D":
            echo "You did poorly!";
            break;
        case "F":
            echo "You did not!";
            break;
        default:
            echo "Invalid grade!";
            break;
    }

?>