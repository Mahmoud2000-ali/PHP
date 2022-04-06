<?php

// ============== make directory ============

# to make directory => mkdir("name"); the directory behind the index.php

   
  //  @mkdir($name); // create dir withe name anasOmar


// ============== remove directory ============

# to remove directory => rmdir("name");


// ============== is directory ============

# to cheack directory => is_dir("name");
# remove the dir , if the dir not fount the result is wrong


$dir = "anasOmar";

    if( is_dir($dir) ){
       
        echo "<p> The Directory is already exsist You don't ned to create one</p>";
    
    }else{
        
        echo "<p> The Directory created Thanks</p>";
        mkdir($dir);
    }
    
    if( is_dir("xx") ){
       
        rmdir("xx");
        echo "<p> The Directory Remove Thanks</p>";

    }else{
        
        echo "<p> The Directory Not fount</p>";
        
    }