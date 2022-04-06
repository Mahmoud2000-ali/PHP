<?php
/*

        for( exp1; exp2; exp3 ){

        do something;

        }

        exp1 _> This init

        exp2 _> this conditional and tell us when the loop will be stop

        exp3 _> increment counter

        ** count($nameArray)  _> return the length of the array


*/

    $learns = array("html", "css", "javaScript", "jquery", "java", "c", "php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> for loop </title>
</head>

<body>

    <p> Select BerthDay </p>
    <select>

        <?php

            for($year =2019; $year >= 1990; --$year){

                    echo " <option value = '  $year '> $year </option>";
            }

        ?>

    </select>

    <p> what i learn  </p>

    <ul name =  "learn">

        <?php
            
            $i = 0;
            for( ; $i < count($learns); ){
                echo "<li name = '$learns[$i]'> $learns[$i] </li>";
                $i++;
            }

        ?>


    </ul>
</body>

</html>

