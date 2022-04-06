<?php 

// ============== file exsist ===================

# first the i can save the file name in var => $file = "anas.txt";
# I must declare the path of file if the file behind the index.php then i don't need to declare it
# there is function to get the path of file index.php
# to check the file is exsist or not => file_exsist(nameFile);
# if the file exsist then return 1 , if not return null

    $path = dirname(__FILE__); # C:\xampp\htdocs\PhP_Learn
    $file = $path."/anas.txt"; 
    if( file_exists($file) != null){
        echo "<p>yes the file $file is exsist </p>";
        file_put_contents($file,"From Yes");
    }else{
        echo "<p>no the file [ $file ] is not exsist but i created the file</p>";
        file_put_contents($file,"From no");
    }
   
 // ============== file basename ===================

# to return the base name of the file

# $x = basename("path",suffix: .php)
# the suffix will remove the .php
    
    $var = basename(__DIR__,".php"); # will return anas
    echo $var;


// ============== dir name ==================

# the same as __DIR__
# dirname(__FILE__, 2); that mean return tow step


// ============== file_put_content ===================

# to put some words into file => file_put_content($path,"word");
# if the file doesn't exsist not problem , they will created with tha $path
# if  is exsist then write the word

    file_put_contents("ali.txt","This Not exsist");
    file_put_contents("anas.txt","This exsist");

// ============== name dir ===================

// ==============  is writable   ===================

# to check the file is writable or not => is_writable($path);

# the same as the file_exsist()

# if the write only and i put content then the result is error

    $x = is_writable("x.txt"); # give him any path
    if ($x != null){
        echo "<p>Yes the file is writable</p>";
    }else{
        echo "<p>No the file is not writable</p>";
        file_put_contents("x.txt","the result is wrong => denied");
    }