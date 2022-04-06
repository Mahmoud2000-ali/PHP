<?php

// ========= try ================

    # will this same java 
    
    # -> same .

    try{

   $handel = fopen('e','r');
    }catch(Exception $e){
        echo $e->getMessage();
    }finally{
        echo ' this will run anyway';
    }