<?php

   
    if($_SERVER['REQUEST_METHOD'] === "POST"){

        if($_POST['username']){


    $admins = array('Anas', 'Omar', "Obaid");
    $username = $_POST['username'];

    if(in_array($username, $admins)){

        echo "Welcome " . $username . " Your password " . $_POST['pass'];
        
    }else{
        echo "The username or password is incorrect";
    }
}else{
    echo "Enter name";

}
}else{
    echo "Sorry Just post";
}