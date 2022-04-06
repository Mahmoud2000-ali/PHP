<?php

    $admins = array('Anas', 'Omar', "Obaid");
    $username = $_GET['username'];

    if(in_array($username, $admins)){

        echo "Welcome " . $username . " Your password " . $_GET['pass'];
        
    }else{
        echo "The username or password is incorrect";
    }