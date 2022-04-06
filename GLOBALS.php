<?php

    //================ globals =============

    $x = 10;
    $y = 50;

    function fun(){
        $GLOBALS['x'] = 16; // reset of the x element
        echo   "the local value is". $GLOBALS['x'] . "<br>";
        $GLOBALS['e'] = "Ahmed"; # to access the element from any where
    }

    fun();
    echo  "The Original value is " . $x;
    echo "<br>" . $e; // this element declare from the func


    $name = "Anas";

    function test(){

        $name = "Ahmed";
        echo "<br> the local name is " . $name;
        echo "<br> the globals name is " . $GLOBALS['name'];

    }

    test();