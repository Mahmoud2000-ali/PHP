<?php

// =============== scan directory ==================

# to show the name and information of this dir
# scandir(nameDir,sort,content);

    $dir = scandir("anas");
  
    echo "<pre>";
    print_r(scandir("anas"));
    echo "</pre>";

    foreach($dir as $directory){
        if(is_file( $directory . "/". "anas")){
            unlink($directory . "/". "anas");
        }
    }