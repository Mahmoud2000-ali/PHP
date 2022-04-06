<?php

# I must declare the mode of file to handel it
# to use it => fread(handel:use fopen, length);
#              fread(handel:use fopen, string ,length);
   
    $handel = fopen("anas.txt","r+");
    $res =  fread($handel,filesize("anas.txt")); # the file must exsist
    echo $res;
    $write = fwrite($handel,"New Write"); // must mode not be r
    fclose($handel);