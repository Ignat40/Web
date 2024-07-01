<?php


if ($test = fopen('log.txt', 'a++')) {

    // $date = date("Y/m/d h:i:sa");
    // fwrite($test, "Refreshed on: " .$date. "\n");

    $contetn = fread($test, filesize('log.txt'));
    echo $contetn;

    //unlink() -> deletes the file specified 

    fclose($test);
} else {
    echo "Wasn't able to open file";
}
