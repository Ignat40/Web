<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ISSETandEMPTY.php" method="post">
        <label>Username</label> 
        <br>
        <input type="text" name="username">
        <br>
        <label>Password</label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" name = "login" value="Log In">
    </form>
</body>
</html>
<?php

    // isset() -> Returns TRUE if a variable is declared and not null
    // empty() -> Returns TRUE if a variable is not declared, false, null, ""

    $username = "peanut";
    $test_var = "";
    
    if (isset($username)){
        //echo "Username is set";
    }
    else {
        //echo "Username is NOT set";
    }

    echo"<br>";

    if (empty($test_var)){
        //echo "The var is empty";
    }
    else {
        //echo "Ain't emtpy";
    }

    echo "<br>";

    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Username is missing";
        }
        elseif(empty($password)){
            echo "Password is missing";
        }
        else {
            echo"Hello {$username}";
        }
    }

?>



