<?php

// ============= substring count ================

# to know how the specify word count in array  
# substr_count($string, word, start, length);
# the start and length is optional
# 

    $str = "I Love php because php is easy php";
    $sub_count = substr_count($str, "php");
    echo "<p>$sub_count</p>"; // the result is 3

    $sub_count = substr_count($str, "php",10);
    echo "<p>$sub_count</p>"; // the result is 2 because start in index 10

    $sub_count = substr_count($str, "php",22,12);
    echo "<p>$sub_count</p>"; // the result is 1 because start in index 22 and the length is 12

