<?php

// ============= filter input ============

    /*
    
    [1] => filter_var($word, FILTER_SANITIZE_STRING) => remove the all tag and return just string  
    [2] => filter_var($word, FILTER_VALIDATE_INT) => Check If the input is int or not return true or false
    [3] => filter_var($word, FILTER_VALIDATE_EMAIL) => Check If the input is Email or not return true or false
    [4] => filter_var($word, FILTER_VALIDATE_FLOAT) => Check If the input is float or not return true or false
    [5] => filter_var($word, FILTER_VALIDATE_BOOLEAN) => Check If the input is boolean or not return true or false
    [6] => filter_var($word, FILTER_VALIDATE_IP) => Check If the input is IP or not return true or false
    [7] => filter_var($word, FILTER_VALIDATE_URL) => Check If the input is url or not return true or false
   
    [1] => filter_var($word, FILTER_SANITIZE_NUMBER_INT) => SANITIZE the wor and return the just int


    
    */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    </head>
    <body>
        <form action = 'checkfilter.php' method = 'POST'>
        
            <input type = 'text' name = 'username' />
            <input type = 'submit' value = 'sent' />
        
        </form>
    </body>
    </html>