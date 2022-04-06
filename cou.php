<?php


    if(empty($_SESSION['C'])){
        $_SESSION['C'] = 1;
    }else{
        $_SESSION['C']++;
    }

    echo 'View of page is ' . $_SESSION['C'];