<?php

// $_GET, %_POST = special variables used to collect data from an HTML form 
//                 data is sent to th file in the action attribute of <form>
//                 <form action = "some_file.php: method = "get>

// $_GET = Data is appened to the url 
//         NOT SECURE
//         Char limit
//         Bookmark is possible w/ values
//         GET requests can be cached
//         Better for a search page

// $_POST = Data is packaged inside the body of the HTTP request
//          MORE SECURE
//          No data limit
//          Cannot bookmark
//          GET requests are not cached
//          Better for submitting credentials


    echo $_GET["username"] . "<br>"; 
    echo $_GET["password"] . "<br>"; // both visible in the browser

    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>"; // provides more security

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="GETandPOST.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>

</body>

</html>