<?php
declare(strict_types=1);
include 'AutoLoader.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oper = $_POST['operation'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $calc = new Calc($oper, (int)$num1, (int)$num2);

    try {
        echo "Result: " . $calc->calculator();
    } catch (TypeError $e) {
        echo "Error: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
