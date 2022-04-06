<?php

// ==================      Constants     ==================================== 

# Syntax _> define("name","value","case-insensitive");
# by defult --> false

define("SITE",FALSE);
const name = "Anas Omar"; // The samething 
echo name; 

if(SITE){

    define("FIRST_NAME"," Anas Omar ",true);
    echo first_nAme;

    define("FIRST_NAME","Aans Omar",true); // The Constant Is already defind
    echo FIRST_NAME . "<br>";

    # In php The Constsnt Use , Example

    echo __FILE__;  # return the source of file
    echo __DIR__;   # return the source of folder
    echo __LINE__;  # return the number of line _> 18

}else{
    echo " The Website Not Aviable "; 
}

# we can creat array of constant

define("CAR",[
    "BMW",
    "benz",
    "mar"
]);
echo CAR[2]; # this will return mar