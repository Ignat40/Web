<?php

// Getting the info from $_GET superGloal

if (isset($_GET['name']) && isset($_GET['username']) && isset($_GET['password'])) {
    if (!empty($_GET['name']) && !empty($_GET['username']) && !empty($_GET['password'])) {
        $name = $_GET['name'];
        $username = $_GET['username'];
        $age = $_GET['age'];

        echo "The following info will go to the DB: " . $name . " " . $username . ' ' . $age;
    }
}

// Getting the info from $_POST superGloal

if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])) {
    if (!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "The following info will go to the DB: " . $name . " " . $username . ' ' . $password;
    }
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

    <form method="POST">
        <div>
            <label>Name:</label><br>
            <input type="text" name="name" />
            <br />
        </div>

        <div>
            <label>Username: </label><br>
            <input type="text" name="username" />
            <br />
        </div>

        <div>
            <label>Password: </label><br>
            <input type="password" name="password" />
            <br />
        </div>

        <button type="submit">
            Submit
        </button>
    </form>

</body>

<?php

echo '<pre>',
print_r($GLOBALS),
'<pre>'

?>

</html>