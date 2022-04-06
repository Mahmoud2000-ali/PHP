<?php

    session_start();
    $_SESSION['FOOD'] = 'RICE';
   
    echo 'Welcome ' . $_SESSION['USERNAME'] . '<br>';
    echo 'Your New food  is  ' . $_SESSION['FOOD'] . '<br>';

    echo '<a href="logout.php"> Logout </a>';

   