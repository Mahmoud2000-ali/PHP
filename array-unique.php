<?php
 
// ================= array unique ====================

# to remove the same value

    $array = array("Anas","Omar","Obaid", "Ragad","Anas","Ahamed");

    $un = array_unique($array);

    echo "<pre>";
    print_r($un);
    echo "</pre>";