<?php

// ================ Replace ==================

# to replace some word for another word

# str_replace( $string search, $string replace, $myString, count:int:op)

    $love = "i love java because the java is easy language and java powerful to learn";
    echo $love . "<br>";

    $result = str_replace("java", "php", $love,$i); # if not fount then no result
    echo $result . "<br>" . " the java found " . $i;

    echo "<br>";

    $love = "i love java because the java is easy language and java powerful to learn";

    $result = str_ireplace(array("lovE","java"), array("loves","php"), $love,$i); # if not fount then no result
    echo $result;
