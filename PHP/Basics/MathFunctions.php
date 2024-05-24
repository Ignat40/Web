<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <form action="MathFunctions.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <br>
        <label>y:</label>
        <input type="text" name="y">
        <br>
        <label>z:</label>
        <input type="text" name="z">
        <br>
        <input type="submit" value="total">
    </form> -->

    <form action="MathFunctions.php" method="post">
        <label>Radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>

</body>

</html>

<?php

$radius = $_POST["radius"];
$total = null;

$total = round(2 * pi() * $radius, 2);
$area = round(pi() * pow($radius, 2), 2);
$volume = round(4/3 * pi() * pow($radius, 3), 2);


echo "The radius is: {$total} <br>";
echo "The area is: {$area} <br>";
echo "The volume is: {$volume} <br>";

// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// $total = null;

// $total = abs($x);
// $total = round($x);
// $total = floor($x);//round down
// $total = ceil($x);//round up
// $total = pow($x, $y);
// $total = sqrt($x);
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = rand(1, 6);
//echo "Number: {$x} <-> Value: {$total}";

?>