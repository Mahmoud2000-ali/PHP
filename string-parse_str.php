<?php

// ============== parse string ======================

# use when i have string as link then the string will parse to ass array

# parse_str($myString, arrayName);

    $str = "name=Anas&age=19&skills=html+css";
    echo $str . "<br />";
    parse_str($str,$myArray);

    echo "<pre />";
    print_r($myArray);
    echo "</pre>";