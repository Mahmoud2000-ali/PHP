<?php

    
    session_start();
    $admins = array('Anas', 'Omar', 'Omar');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(in_array($_POST['username'], $admins)){
            $_SESSION['USER'] = $_POST['username'];
            echo 'WELCOME ' .   $_SESSION['USER'] . '<br>' . 'Waith 5';
            header('REFRESH:5;URL=dash.php');
        }else{
            echo ' SORRY  ' . $_POST['username'] . ' YOU NOT ADMIN ';
        }

    }else{
        echo "ERROR: DO YOU WANT HACK ?";
    }