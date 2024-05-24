<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <header>
        <nav>
            <div class="nav-container">
                <h3>Basic Login</h3>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">RNDM</a></li>
                    <li><a href="#">RNDM</a></li>
                    <li><a href="#">RNDM</a></li>
                </ul>
                <ul class="menu-member">
                    <?php
                        if(isset($_SESSION["userid"])) {
                            echo '<li><a href="#">' . htmlspecialchars($_SESSION["useruid"]) . '</a></li>';
                            echo '<li><a href="includes/logout.inc.php">LogOut</a></li>';
                        } else {
                            echo '<li><a href="#">Sign Up</a></li>';
                            echo '<li><a href="#" class="header-login-a">LogIn</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </nav>
    </header>

    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>Sign Up</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="E-mail">
                    <br>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>Log In</h4>
                <p>Already have an account? Log in here!</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">Log In</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>
