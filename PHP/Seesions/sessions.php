<?php

// session -> SGB used to store information on a user
//            to be used across multiple pages.
//            A user is assigned a seesion-id
//            ex. login credentials.

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="sessions.php" method="post">
        Username:<br>
        <input type="text" name="username"><br>
        Password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">

    </form>

</body>

</html>

<?php

// $_SESSION["username"] = "Peanut"; // Sets username for the session.
// $_SESSION["password"] = "pizza123";

// echo $_SESSION["username"] . "<br>";
// echo $_SESSION["password"] . "<br>";

if (isset($_POST["login"])) {
    $_SESSION["username"] = $_SESSION["username"];
    $_SESSION["password"] = $_SESSION["password"];

    if (
        !empty(($_POST["username"])) &&
        !empty($_POST["password"])
    ) {
        $_SESSION["username"] = $_POST["username"] . "<br>";
        $_SESSION["password"] = $_POST["password"] . "<br>";

        header("Location: home.php"); // jumps to the given location

    } else {
        echo "Missuing username/password";
    }
}
?>