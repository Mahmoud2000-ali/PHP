<?php

    session_start();
if(isset($_SESSION['USER'])){

    echo 'INFO USER:'. $_SESSION['USER'];

}else{
    echo 'SORRY';
}
echo "<br> . <a href= 'logout.php' > LOGOUT </a>";