<?php

    // hashing => transforming sensitive data (passwords)
    //            into letters, numbers, and/or symbols
    //            via a mathematical process. (kind of similar to encryption)
    //            Hides the original data from 3rd parties. 

    $password = "peanut123";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo $hash;

    if(password_verify("peanut123", $hash)) {
        echo "TRUE";
    } else {
        echo "Incorrect password!";
    }

?>