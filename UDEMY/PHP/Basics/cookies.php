<?php

date_default_timezone_set("America/Buenos_aires");

$expiration = time() + 86400;
setcookie("COOLCOOKIE", "Here goes the value of the cookie", $expiration);

echo $_COOKIE["COOLCOOKIE"].'<br/>';

echo '<pre>',
    print_r($GLOBALS),
    '<pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    
</body>
</html>