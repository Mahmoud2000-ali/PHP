<?php

// ================== trim ====================

# to remove the space from string 

    $string = "  I Love php  ";
    echo "<p>$string</p>";
    echo strlen($string) . "<br>";

    $string = trim($string);
    echo "<p>$string</p>";
    echo strlen($string) . "<br>";


// ================== ltrim ====================

# to remove the space from string just left

$string1 = "  I Love php  ";
echo "<p>$string1</p>";
echo strlen($string1) . "<br>";

$string1 = ltrim($string1);
echo "<p>$string1</p>";
echo strlen($string1) . "<br>";


// ================== rtrim ====================

# to remove the space from string just right

$string2 = "I Love php";
echo "<p>$string2</p>";
echo strlen($string2) . "<br>";

$string2 = trim($string2, "I asphp");
echo "<p>$string2</p>";
echo strlen($string2) . "<br>";
