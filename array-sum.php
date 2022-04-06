<?php

// ============= array sum ========================

function sum($numbers){
    $x = 0;
    for( $i = 0; $i < count($numbers) ; ++$i ){

      @$x += $numbers[$i];

    }
        return $x;
}

    $number = array("Ahmad",1.2,"3","4.2",6,3,"Anas",2);
    $result = sum($number);
    
   echo "<h1> $result </h1>";
 
# to sum the array and ignore the string 

   $resultArray = array_sum($number);
   echo "<h1> $resultArray </h1>";