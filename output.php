<?php
    print (" <h1> This h1</h1> ");
    echo (" <h1> This h1</h1> "); 
    echo "Hello <br>";
    echo "This one","This tow";
    echo "<br>",20;
    echo "<p class=\" a \">a</p>";
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title><?php echo "Homepage" ?> </title>
        </head>
        <body>
            <!-- This The First Way To Use echo -->
            <h1> <?php echo "Headin"; ?></h1>
            <p> <?php echo "This para From p"; ?> </p>
            <!-- This The Second Way To Use echo -->
        <?php
            echo 
            "<h1> Heading </h1> 
            <p> This para From echo </p>"; 
        ?>
        </body>
    </html>



