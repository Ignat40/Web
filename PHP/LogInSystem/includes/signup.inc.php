<?php

if (isset($_POST["submit"])) {

    // Grab the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // Instantiate SingUpContr class
    include "../classes/dbh.class.php";
    include "../classes/signup.class.php";
    include "../classes/singup-contr.class.php";

    $signUp = new SingUpContr($uid, $pwd, $pwdrepeat, $email);


    // Running error handlers and user signup
    $signUp->singUpUser();

    // Going to back to front page 
    header("location: ../index.php?error=none");
}
