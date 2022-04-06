<?php

// ============== String to Lower =============

# to change the all string to lower => strtolower($string);

    $love = "I LOVE PHP And JavaScript";
    $lower = strtolower($love);
    echo "<p> $lower </p>";


// ============== String to Upper =============

# to change the all string to Upper => strtoupper($string);

    $love2 = " I loVe java and Php";
    $upper = strtoupper($love2);
    echo "<p> $upper </p>";


// ============== Upper first  =============

# to change the first characters of String to Upper

    $love3 = "i loVe java and Php";
    $uc = ucfirst($love3);
    echo "<p> $uc </p>";


// ============== lower first  =============

# to change the first characters of String to lower

    $love4 = "I loVe java and Php";
    $lc = lcfirst($love4);
    echo "<p> $lc </p>";


// ============== uc words =============

# to change the first characters from All string to upper

$love5 = " i love jaVa aNd php";
$ucw = ucwords($love5);
echo "<p> $ucw </p>";



// =========== practical ==========

    $text = "I LOve JAva ANd PhP SO ItS EaSY TO lEARn";
    echo "<p> $text </p>";
    echo strtolower($text) . "<br>";
    echo strtoupper($text) . "<br>";
    echo ucfirst($text) . "<br>";
    echo lcfirst($text) . "<br>";
    $lower2 = strtolower($text);
    echo ucwords($lower2);


