<?php

// ================= cookie ============

    



    /*
    
        setcookie(name, value, expireDate, path, Domain, source, httpOnly);
    
        name    => name of my cookie
        value   => what my cookie content
        expire  => expiration the date + seconds
        /       => the path of my site
        Domain  => select the domain and sub domain
        source  => true sent https not http 
        httpOnly => sent just request 

    */

    setcookie('anasOmar', 'studentInfo', time() + 86400);

    if(count($_COOKIE) > 0){
        echo "good this website use cookie";
    }else{
        echo "sorry you must enable the cookie";
    }