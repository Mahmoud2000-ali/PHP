<?php

// =============== array reverse ================

# to reverse the array => array_reverse(myArray,preserve)

# the default of preserve is false and not reverse the index

# if I add true then the array will reverse withe index

    $langs = array("Html","vue","React","Angular","php");

    echo "<pre>";
    print_r($langs);
    echo "</pre>";

    $reverse = array_reverse($langs,true);
    echo "<pre>";
    print_r($reverse);
    echo "</pre>";


// =============== array shuffle ================

# to mixed the array and not mixed the index

    $num = array(1,2,3,4,5,6,7,8,9,0);
    echo "<pre>";
    print_r($num);
    echo "</pre>";

    shuffle($num);
    echo "<pre>";
    print_r($num);
    echo "</pre>";


// ============== array fill ====================

# to create array and describe the number of array

# array_fill(index:any-index, number-of-array, value: can-be-any-value)

    $fill = array_fill(1,6,array("Anas","Omar","Obaid"));
    echo "<pre>";
    print_r($fill);
    echo "</pre>";
