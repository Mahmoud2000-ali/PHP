<?php

// ========== path name ===================

# to return array include the info about file
/*
    [dirname] => C:\xampp\htdocs\PhP_Learn
    [basename] => file-system_pathinfo.php
    [extension] => php
    [filename] => file-system_pathinfo
*/

    $info = pathinfo(__FILE__);
    echo "<pre>";
    print_r($info);
    echo "</pre>";
    echo $info['extension']; // return php
    