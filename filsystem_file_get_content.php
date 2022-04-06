<?php

// ========= file get content =================

# [1] => to get any path in web ==> file_get_content(htpps:// www.ac.com);
# [2] => to read and get the content file ==> file_get_content($pat,false,null,start,maxlengt);
# to start with specif index and maxLenght to stop
# by default max will end in last
# if the file dos not exsist the result is error

  file_get_contents("https://gaza-gifted-youth.000webhostapp.com/"); // return web

  $content = file_get_contents("anas.txt",FALSE,NULL,2);
  echo $content;