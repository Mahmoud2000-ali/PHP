<?php

    $user =  $_POST['username'];
   
    $user = filter_var($user, FILTER_SANITIZE_NUMBER_INT);
      
    echo $user;
  