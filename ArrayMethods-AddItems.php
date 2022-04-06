<?php

// ================= array_push =====================

# to push the element in my array =>  array_push(myArray,value1,....);

# this will push in last index to my array

    $myArray = array("Anas","Omar","Obaid");
    echo "<pre>";
    print_r($myArray);
    echo "</pre>";
    array_push($myArray,"Ahmad","Mark","Jon");
    echo "<pre>";
    print_r($myArray);
    echo "</pre>";

   
    $test = array();
    array_push($test,"sara","mil");
    echo "<pre>";
    print_r($test);
    echo "</pre>";

    
    $ass = array(
        1 => "java"
    );
    array_push($ass,"css","ajax","sql");
    echo "<pre>";
    print_r($ass);
    echo "</pre>";


// ================= array_unshift =====================

    # to push the element in my array =>  array_unshift(myArray,value1,....);

    # this will push in first index to my array

    $myArray = array("Anas","Omar","Obaid");
    echo "<pre>";
    print_r($myArray);
    echo "</pre>";
    array_unshift($myArray,"Ahmad","Mark","Jon");
    echo "<pre>";
    print_r($myArray);
    echo "</pre>";