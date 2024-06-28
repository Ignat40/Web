<?php


$namesArray = array();
$errorsArray = array();
$page = 1;
$chosenOne = '';

if (isset($_GET['names'])) {
    if (!empty($_GET['names'])) {
        $names = $_GET['names'];
        $namesArray = explode(',', trim($names, ","));

        $hasError = validate($namesArray);

        if (!$hasError) {
            $page = 2;
            if(isset($_GET['do_math']))
            {
                $page = 3;
                $chosenOne = $namesArray[array_rand($namesArray)];
            }
        }
    }
}

function validate($names)
{
    global $errorsArray;
    $hasErrors = false;
    if (count($names) <= 1) {
        array_push($errorsArray, "You need at least 2 names!");
        $hasErrors = true;
    }

    foreach ($names as $name) {
        if (strlen($name) <= 2) {
            array_push($errorsArray, "Names Must Be At Least 3 Charactres long!");
            $hasErrors = true;
        }
    }


    return $hasErrors;
}
