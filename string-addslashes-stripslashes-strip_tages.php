<?php

// =================== add Slashes ========================

# to add back slash before the ' and " => addslashes($myString);

# i do to put back slashes because the data

    $string = " Hi I'm Loves 'php' ";
    echo "<p> $string </p>";

    $addslashes = addslashes( $string );
    echo "<p> $addslashes </p>";


// =================== strip Slashes ========================

# to strip the slashes of string => stripslashes($myString);

# if the string contain the slashes then will be stript

    $stript = stripslashes($addslashes);
    echo "<p> $stript </p>";


// =================== strip tags ========================

# to strip the tag html of string => strip_tags($myString,Allow);

# allow that mean if i allow to specs tag

    $stringTag = "  I Love <b> php </b> To Learn it <a href = 'php.com '> Php </a> ";
    echo $stringTag;
    
    $stripTag = strip_tags($stringTag);
    echo "<p> $stripTag </p>";