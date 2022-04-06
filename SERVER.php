<?php

// ============ PHP_SEL =========================

/*
    * super globals
    
    * $_SERVER['PHP_SELF']      => sent the same page
    * $SERVER['SERVER_ADDR']    => to return the server address
    * $_SERVER['SERVER_NAME']   => to return the name of the server 
    * $_SERVER['QUERY_STRING']  => return the info link after ?
    * $_SERVER['SERVER_PORT']   => the port of server to enable enter the server
    * $_SERVER['HTTP_REFERER']  => to show how i enter of this site
    * $_SERVER['REQUEST_METHOD'] => return the post or get
*/    
    echo $_SERVER['PHP_SELF'] . "<br>";
    echo $_SERVER['SERVER_ADDR']; # ::1
    echo "<br>";
    echo $_SERVER['SERVER_NAME']; # localhost
    echo "<br>";
    echo $_SERVER['QUERY_STRING']; #example name=anas&age=21&skills=play
    echo "<br>". $_SERVER['SERVER_PORT']; #80
    echo "<br>".$_SERVER['HTTP_REFERER']; #example index.php
    echo "<br>". $_SERVER['REQUEST_METHOD']; # GET
