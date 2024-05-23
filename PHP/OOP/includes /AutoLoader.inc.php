<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($classNmae)
{
    $path = "Classes/";
    $extention = ".class.php";
    $fullPath = $path . $classNmae . $extention;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}
