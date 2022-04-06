<?php

// ==================      string     ==================================== 

$var1 = "Hello Word";
$var2 = 'Hello Word'; 

$type1 = gettype($var1); # To return just the type of variables _> string

echo $type1 . "<br>";

echo var_dump($var1) . "<br>"; # To return the type of variables and the lenght _> string(10) Hello Word


// ==================      integer     ==================================== 

$var1 = 9;

$type1 = gettype($var1); # To return just the type of variables _> integer

echo $type1 . "<br>";

echo var_dump($var1) . "<br>"; # To return the type of variables and the lenght _> int(9)


// ==================     boolean      ==================================== 

$var1 = true;
$var2 = FALSE;

$type = gettype($var1);

echo $type . "<br>";

echo var_dump($var2) . "<br>";


// ==================     float [double]      ==================================== 

$var1 = 10.5;

echo gettype($var1) . " <br> "; # this will return double

echo var_dump($var1) . " <br> "; # this will return float(10.5)


// ==================     array      ==================================== 

$var1 = array(

    "A" => "Value Of A",
    "B" => "Value Of B"
);

echo gettype($var1) . " <br> "; # this will return array

echo var_dump($var1) . " <br> "; # this will return information of array

// ==================     Null      ==================================== 

$var1 = null;

echo gettype($var1) . " <br> "; # this will return NULL

echo var_dump($var1) . " <br> "; # this will return information of NULL

// ==================     object      ==================================== 

class Book{

    function Book(){
        $this->genre = "A";
    }

}

$var1 = new Book();

echo gettype($var1) . " <br> "; # this will return NULL

echo var_dump($var1) . " <br> "; # this will return  NULL


// ==================     Resource      ==================================== 

$var1 = fopen("anas.txt");

echo gettype($var1) . " <br> "; # this will return Resource Or boolean

echo var_dump($var1) . " <br> "; # this will return information of Resource or boolean