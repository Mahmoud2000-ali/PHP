<?php

    $mainColor = '#fff';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $mainColor = $_POST['color'];
        setcookie('BAC', $mainColor, time() + 3600 ,'/');
        
    }

    if(isset($_COOKIE['BAC'])){
        $body = $_COOKIE['BAC']; 
    }else{
        $body = $mainColor;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style ='background-color : <?php echo $body; ?>'>
    
    <form action = " <?php $_SERVER['PHP_SELF']; ?> " method = "POST">
    
        <input type = "color" name = "color" />
        <input type = "submit" value = "Chose Color" />
    
    </form>

</body>
</html>