<?php

// ============= include file ======================

# to include file on my file will ues include "index.php";

# to include just one will use include_once "index.php";

    include "global.php"; # include more one 
    echo $pageName;
    echo "<br/>";   
    include_once "global.php"; # include just one 
    echo $pageName;