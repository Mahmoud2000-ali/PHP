<?php

// ==================      Conditional     ==================================== 

# The Conditional Is simillar java 
# if(Conditional) _> just Conditional The result should be [ true or false ]

    $ticketPrice = 200;

    if($ticketPrice >= 400 && $ticketPrice < 500){
        echo " Your Ticit Price Is " . $ticketPrice . " and You have 5% Diccount";
    }
    elseif($ticketPrice >= 500 && $ticketPrice < 600){
        echo " Your Ticit Price Is " . $ticketPrice . " and You have 15% Diccount";
    }
    else{
        echo " Your Ticit Price Is " . $ticketPrice . " and Ther is no discount";
    }

    echo "<br>";

    # now we will go to switch _> The same thing if

    $favcolor = "s";

    switch($favcolor){
        case "red" : echo " Your favorite color is  " . $favcolor ; 
            break;
        case "blue" : echo " Your favorite color is  " . $favcolor ; 
            break;
        case "black" : echo " Your favorite color is  " . $favcolor ; 
            break;
        default :  echo " Good bay  " ; # if they are false
    }