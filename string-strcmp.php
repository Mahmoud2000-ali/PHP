<?php

// =============== str compare ===================

# to compare tow string strcmp($string1,string2,length);
# return 0 if tow string is equal 
# return big 1 if string 1 is big string 2
# return less 0 if string 1 less than string 2
# the length is optional 
    $string1 = "java";
    $string2 = "php";
    echo strcmp("java", "Java") . "<br>";
    
    echo strcasecmp("java","Java"); // case-instate



// ================ str reverse ===========

# to reverse the string

    $str = "Anas";
    echo strrev($str);