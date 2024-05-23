<?php
    declare(strict_types=1);
    include 'includes/AutoLoader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usual Calculator</title>
</head>
<body>

    <h2>The Mandatory Calculator App</h2>
    <form action="includes/calc.inc.php" method="post">
        First Number: <br>
        <input type="number" name="num1" placeholder="First Number"><br>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="multi">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <br>
        Second Number: <br>
        <input type="number" name="num2" placeholder="Second Number"><br>
        <button type="submit" name="submit">Calculate</button>
    </form>
    
</body>
</html>
