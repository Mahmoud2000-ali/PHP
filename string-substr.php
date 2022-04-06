<?php

// ============ sub string ===================

# to return sub string from string and i don't know the word like strstr
# substr( $string, substr:number, length);
# the length is optional

    $str = "I Love java and php , and i hate asp.net";
    $sub = substr($str, 20); # the result is sub string start 20 to the last
    echo "<p>$sub</p>";
    echo "<p>$str</p>";
    $sub = substr($str,0,20); # the result is sub string start 0 and the length is 20
    echo "<p>$sub</p>";

    // now negative

    echo substr($str,-3) . "<br>"; // the result is net
    echo substr($str,-5,-3); // the result is p.