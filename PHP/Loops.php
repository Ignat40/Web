<?php

    // For Loop

    for ($i = 0; $i < 5; $i++) {
        echo "Hello" . $i . "<br>";
    }

    // $counter = $_POST["counter"];

    // for ($i = 0; $i <= $counter; $i++) {
    //     echo "". $i ."<br>";
    // }

    // While Loop 

    while ($counter < 10) {
        $counter++;
        echo "". $counter ."<br>";
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
    <form action="Loops.php" method="post">
        <label>Enter a number to count to: </label>
        <input type="text" name="counter">
        <input type="submit" name="Count">
    </form>
    
</body>
</html>