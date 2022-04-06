<?php

// ============== nl2br =============================

# nl2br => new line to break tag <br/>

    $str = "php is easy \n language \n and java is easy lang";
    $str = nl2br($str);
    echo "<p>$str</p>";