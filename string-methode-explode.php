<?php

// ================== explode =================

# to convert the string to array 

# $result = explode(type, myString, maxValue: can positive or negative)

# we note that i can use tow or more type to explode the string 

# when i put -1 or -2 say put the string in array except last index or 2 last index

# if i put 0 that mean convert the string in array in one index
    
    $str = "Hi I Love PHP";
    echo $str . "<br>";

    $result = explode(" ", $str,-2);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    $file = "footer,image,body,nav,head";

    $array = explode(",",$file);

    for( $i = 0; $i < count($array); ++$i){

        echo "<link rel = 'stylesheet' href = 'ccs/$array[$i].css'></link>";
    }