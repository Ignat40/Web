<?php

class DBH
{
    protected function connect() {
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO("mysql:host=localhost;dbname=login", $username, $password);
            return $dbh;
        }
        catch(PDOException $e) {
            echo "Error:". $e->getMessage() . "<br>";
            die();
        }
    }
}
