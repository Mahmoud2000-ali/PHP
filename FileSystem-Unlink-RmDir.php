<?php 

// ============= unlink =====================

#unlink("file") => to remove the file


        function remove($file){
            
            if(file_exists($file) && is_writable($file)){
                unlink($file); // remove the file
                echo "The file remove successful";
            }elseif(!file_exists($file)){
                echo "The File dos not exsist";
            }else{    
                chmod($file,0755);
                remove($file);
            }        
        }

    remove("anas.txt");


// ============= remove directory  =====================   

# to remove the direct use rmdir(nameDir)
        rmdir("anas"); // remove the dir