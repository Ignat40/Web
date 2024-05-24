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
<form action="RadioButtons.php" method="post">
    <input type="radio" name="credit_card" value="Visa">
    Visa<br>
    <input type="radio" name="credit_card" value="MasterCard">
    MasterCard<br>
    <input type="radio" name="credit_card" value="AmericanExpress">
    AmericanExpress<br>
    <input type="submit" name="confirm" value="confirm">
</form>
<?php

if (isset($_POST["confirm"])) {

    $creadit_card = null;

    if (isset($_POST["credit_card"])) {
        $creadit_card = $_POST["credit_card"];
        echo "Creadit card selected: {$creadit_card}";
    }
    else{ 
        echo "Nothing selecteddd";
    }
} else {
    echo "Nothing selected";
}
?>