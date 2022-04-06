<?php

    // ============ session ===================


    session_start();

    $_SESSION['USERNAME'] = 'Ansa';
    $_SESSION['PASS'] = 1212;
    $_SESSION['FOOD'] = 'PIZZA';
    $_SESSION['COLOR'] = 'RED';

    echo '<a href="page1.php"> kitchen </a>';
