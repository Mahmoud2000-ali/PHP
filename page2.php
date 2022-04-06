<?php

    session_start();

    echo 'Welcome ' . $_SESSION['USERNAME'] . '<br>';
    echo 'Your Color  is  ' . $_SESSION['COLOR'];

    echo '<a href="page3.php"> modfiy the food</a>';