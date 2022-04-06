<?php

// ============== array rand ================= 

# return random number value array => just return index

# if i want to return to or more random number then the result has array

    $value = array("html", "vue", "pug", "gulp");

    $random = array_rand($value,3);

   echo  $value[ $random[0] ]  . "<br>"; # the random is array contain 3 index start withe 0
   echo  $value[ $random[1] ]  . "<br>";
   echo  $value[ $random[2] ]  . "<br>";

   // if i want to return just on value then

  $result = $value[$random];
