<?php
declare(strict_types= 1); //type declaration said to true. (Will disable loading integer with string etc...)
    include '../OOP/includes /AutoLoader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //$person1 = new Person('Ignatcho', '186', '20');
        // echo $person1 -> name;
        // echo "<br>";
        // echo $person1 -> height;
        // echo "<br>";
        // echo $person1 -> age;
        // echo "<br>";
        // $person1->setNmae('Peanut');
        // echo $person1 ->name;
        // echo "<br>";

        // echo $person1 -> getName();
        // unset($person1);                    //-> destructor. Destroys the object. 
        //echo $person1->getName();


        // Accessing a static property    

        echo Person::$drinkingAge; 
        Person::setDrinkingAge(21);
        echo Person::$drinkingAge;
        $person3 = new Person("Ignatcho", '186', '20');
        echo $person3->getDrinkingAge();

        try {
            $person3->setNmae(3);
        } catch (Exception $e) {
            echo $e->getMessage();
        }





        
        
    ?>
</body>
</html>