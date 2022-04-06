<?php

// ================== implode =================

# to convert the array into string

# $result = implode(type, myString)

# the same thing join can make that

    $array = array("html", "Css", "pug", "gulp", "php", "js");

    $result = join(" ", $array);
    echo "<h1> me skills is $result </h1>";