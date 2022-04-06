<?php

// ================= string word count =================

# to show how word in string => str_word_count($myString,format,charList);

# format => [0] by default 
# format => [1] change the every word in index array
# format => [2]  change the every word in ass array

# charList => by default the special characters not count but i can put special to count

    
    $str = "I Love php and java php & javaScript";
    $str = str_word_count($str,1,"&");
    print_r ($str) . "<br>";

    
    $str1 = "I Love php and java php & javaScript";
    function str_count($string){
        $count = 0;
        for( $i = 0; $i < strlen($string); ++$i ){
            if($string[$i] == " "){
                ++$count;
            }
        }
        return $count + 1;
    }

    $result = str_count($str1);
    echo $result ."<br>";

