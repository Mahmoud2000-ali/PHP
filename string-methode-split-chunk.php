<?php

    function split($string){
        $array = array();
        for( $i = 0; $i < 9; ++$i ){
            array_push($array, $string[$i]);
        }
        return $array;
    }

    $name = "Anas Omar";
    $result = split($name);

// ================ split =====================

# to convert the string to array but there different betwen explode and split

# $result = str_split($nameString, length)

# by default the length is 1 that mean every index must have one value 

    $result2 = str_split($name,2);
    echo "<pre>";
    print_r($result2);
    echo "</pre>";

// ================ chunk_split =====================

# convert string to string 

    $love = "ILovejava";
    $chunk = chunk_split($love,1,"");
    echo $chunk;