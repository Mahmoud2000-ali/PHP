<?php

/*

    ** [ 1 ] for index array
    foreach( $arrayName as $value ){
        echo $value;
    }


    ** [ 2 ] for associative array
    foreach( $arrayName as $key => $value){
        echo $key . " ==>  " . $value;
    }


*/

$laerns = array("html", "css", "php");

$Friends = array(

    "Anas"   => "Obaid",
    "Hamza"  => "Awad",
    "Ahamad" => "Alaa",
);

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
    
    <p> foreach index array </p>
    <ul name="Learns">  
        <?php
            foreach($laerns as $value){
                echo "<li value = '$value'> $value </li>";            
            }
        ?>
    </ul>
    <p> foreach associative array </p>
    <ul name="Friends">  
        <?php
            foreach($Friends as $key => $value){
                echo "<li value = '$key' > The Name is $key and The family Name is $value </li>";            
            }
        ?>
    </ul>
</body>
</html>
