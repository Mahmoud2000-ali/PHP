<?php
    $nameStudent = "Anas"; // Note That Is Daynmic 
    $age_Student = 19;
    $nameStudent = $age_Student; // Left To Right
    
    $nameCourse = "Concatenation";
    $homePage   = "Php-" . $nameCourse; // To Concatenation The Variables
    $heading    = $nameCourse;
    $parag      = "Welcome " . $nameCourse;

    $lan        ="<ul>"; # Start ul
    $lan       .="<li> php </li>";
    $lan       .="<li> java </li>";
    $lan       .="<li> C </li>";
    $lan       .="</ul>"; # End Comment

    $tages      = "<h1> Heading </h1>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $homePage; ?></title>
</head>
<body>
    <!-- To Use Variables -->
    <?php
    $_skills = 'Fotball';
    echo "$nameStudent"; // Note Just Use ($)With name Variables -->
    echo $_skills; // We Cane Not Use Double Q , But Never Use Single Q -->
    ?>

    <!-- To Use Variables 2-->
    <h1> <?php echo "This" . " " . $heading ?> </h1>
    <p> <?php echo $parag; ?> </p>

    <!-- To Use Variables 3-->
    
      <?php echo $lan ?>
    
    <p> <?php echo $tages ?> </p>
</body>
</html>