<?php 

    // cookies -> Information about a user stored in a user's web-browser
    //            targeted ads, browsing preferences and 
    //            other non-sensitive data

    setcookie("fav_food", "pizza", time() + 86400,"/"); // the cookie stays for a day
    setcookie("fav_drink", "coffee", time() + (86400*3),"/"); // three days
    setcookie("fav_dessert", "ice_cream", time() - 0,"/"); // deletes a cookie

    foreach($_COOKIE as $key => $value) {
        echo "Key". $key . "=". $value . "value" .  "<br>";
    }

    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]}";
    }
    else {
        echo "I don't know this food";
    }

?>