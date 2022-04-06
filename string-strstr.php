<?php

// =============== strstr ========================

# to split the string
# by default false => that mean will split the word and after
# true => split the before the word and not word
# strchr same thing

    $str = "I Love java and php";
    $res = strstr($str,"Love",false); // Love java and php
    $res = strstr($str,"java",true); // I Love
  //  echo $res;


// =============== stristr ========================

# to split the string
# by default false => that mean will split the word and after
# true => split the before the word and not word

    $str = "I love java and php";
    $res = stristr($str,"LoVe",false); // LoVe java and php
    echo $res . "<br>";
    $res = stristr($str,"JavA",true); // I Love
    echo $res;
