<?php

// ========== uniq =============

    # uniqid() => return string that have 13 number and string
    # uniqid('_SCRIPT', TRUE) => THE default is false and when add true will be return 23
    # constant => to print and get the define value 
    
    $random = uniqid('SCRIPT_1', TRUE);
    echo $random;
    echo '<br>';

    define("NAME",'Anas');
    echo constant('NAME'); // Same as echo NAME;