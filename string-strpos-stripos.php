<?php

// ====================== str position ============

# to found the position of the word => strpos($string,world,index to start);

# the index by default is 0 and i can start with any index

# note php not like PHP 

    $str = "I Love php and java but php is is easer";
    $res = strpos($str, "php");
  //  echo $res;


// ====================== str i position ============

# to found the position of the word => stripos($string,world,index to start);

# note php like PHP 

    $str = "I Love php and java but php is is easer";
    $res = stripos($str, "PHp",8);
   // echo $res;


// ====================== strr position ============

# to found the position of the word => stripos($string,world,index to start);

# note php not like PHP 

# but will start right

    $str = "I Love php and java but php is is easer";
    $res = strrpos($str, "php");
    echo $res;


// ====================== strr i position ============

# to found the position of the word => stripos($string,world,index to start);

# note php like PHP 

# but will start right

$str = "I Love php and java but php is is easer";
$res = strripos($str, "PHp");
echo $res;

