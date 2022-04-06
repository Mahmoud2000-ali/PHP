<?php

//=========== Array pop  ====================

# to delete the last index from array

# note that when i delete the value , the method return the value the deleted

    $myArray = array("html","css","php");
    echo "<pre>";
    print_r($myArray);
    echo "</pre>";

    echo array_pop($myArray);
    echo "<pre>";
    print_r($myArray);
    echo "</pre>";


//=========== Array shift  ====================

# to delete the first index from array

# note that when i delete the value , the method return the value the deleted

    $skills = array("css","php","c","java","ajax","xml","javaScript");
    echo "<pre>";
    echo print_r($skills);
    echo "</pre>";

    $var  = array_shift($skills);
    echo "<pre>";
    echo print_r($skills);
    echo "</pre>";


