<?php

// ================ copy file ========================
# copy(old,new);
    
    if(file_exists("anas.txt")){
        echo "<p>Sorry the file is exsist</p>";
    }else{
        file_put_contents("anas.txt","Hi Anas");
    }

   copy("anas.txt","anas2.php");


// ================ copy file ========================
# rename(oldName,newName); will remove anas.txt and put omar.txt

   rename("anas.txt","omar.txt");