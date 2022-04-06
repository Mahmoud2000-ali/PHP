<?php

/*
    exp1;
    
    do{

        something;

    } while(exp3);

*/

    $learns = array("html", "css", "php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>do while</title>
</head>
<body>
    
    <p> What I learns </p>
    <ul name = "Learns">
    <?php

       $i = 0;
       do{
            echo "<li name = '$learns[$i]'> $learns[$i] </li>";
            ++$i;
       } while( $i < count($learns) ); 

    ?>
    </ul>

</body>
</html>