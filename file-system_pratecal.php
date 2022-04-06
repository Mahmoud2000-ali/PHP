<?php

/*
    [1] => Cheack if the directory is exsist or not
    [2] => Make the directory
    [3] => assign this directory to variable
    [4] => create a file include this directory
    [5] => assign this file to variable
    [6] => change mode of this file to be read only
    [7] => cheack if this file in read only
    [8] => change mode of this file and make it writable
    [9] => include this file
*/

    $nameDirectory = "anas";
    $nameFile = "x.txt";
    $pathDirectory = __DIR__ . "/" . $nameDirectory . "/";
    $pathFile = $pathDirectory . $nameFile;

    if( is_dir($nameDirectory) ){
        echo "<p> sorry the directory is exsist </p>";
    }else{
        mkdir($nameDirectory);
    }

    if( file_exists($pathFile) ){
        echo "<p> sorry the file is exsist </p>";
    }else{
       file_put_contents($pathFile, "Hi From php");
    }