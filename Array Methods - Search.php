<?php

// ===================== in_array =================================

# to search some value in array

# in_array("value", nameArray,Type) _> the type true or false as == or ====

# return 1 or true if the value is correct and null or 0 if the value doesn't correct

    $myArray = array(5,"css","js","java","php");
    $word = "5";
    
    if(search($myArray,$word) == -1){
        echo "<h1> Yes </h1>";
    }else{
        echo "<h1> No </h1>";
    }
    
    
    
    function search($array, $anyWord){
        if( in_array($anyWord,$array) ){
            return -1;
        }else{
            return 1;
        }
    }
   

// ===================== array_search =================================

# to search some value in array

# this will return the index from array not 0 and 1 as in_array

# if the value not correct will return null

    $skills = array("swim","football");
    echo array_search("football",$skills);
    
    if(array_search("football",$skills) != null){
        echo "<br> Yes";
    }else{
        echo "<br> No";
    }



// ===================== array_key_exsist =================================

# To search some index in array

# this will return 1 if exsist and null of not fount

    $skills = array("swim","football");
    echo "<br>" . array_key_exists(1,$skills);

    if(array_key_exists(1,$skills) != null){
        echo "<br> Yes";
    }else{
        echo "<br> No";
    }


    $marks = array(
        1 => "html",
        2 => "css",
        3 => "php"
    );

    echo array_search("css",$marks);