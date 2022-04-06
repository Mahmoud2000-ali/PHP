<?php

 session_start();

 echo 'Welcome ' . $_SESSION['USERNAME'] . '<br>';
 echo 'Your food  is  ' . $_SESSION['FOOD'];

    echo  '<br>'.'<a href="page2.php"> COLOR </a>';