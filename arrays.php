<?php

// ---------------- Index Arrays ----------------------------

    $works = array("Anas", "Omar", "Ahmad", "Amer");
    $works[4] = "Amado"; # We Say The array that name works must have value name is amado withe index 4 , we add
    $works[] = "Essay"; # set the value that have index 2 to Essay, we set
    echo "<pre>";
    print_r($works);
    echo "</pre>";

    
    // array inside array
    $langs = array("html","css","bootstrap",array("js","es6","ajax"));
    echo "<pre>";
    print_r($langs);
    echo "</pre>";
    echo $langs[3][1]; # to print a value in array that have index 3

    
    // use array withe for loops
    echo "<ul>";
    for($i=0;$i<count($works);++$i){
        echo "<li>". $works[$i] ."</li>";
    }
    echo "</ul>" . "<br>";

    
    // use array withe foreach loops
    echo "<ol>";
    foreach($works as $work){
        echo "<li> $work </li>";
    }
    echo "</ol>";




// ---------------- Associative Arrays ----------------------------

    # the key can be just int or string
    # the value can be object or any data
    $skills = array(
        "60%"   => "html",
        "50%"   => "Css",
        "70%"   => "java",
        "90%"   => "js"
    );

    $skills["60%"] = "html5"; # We Say The array that name skills must have key and value, we add
    $skills["100%"] = "adobe xd"; # we say the array withe name skills must have key and value adobe xd add in last
    echo $skills["60%"];

    // use array withe foreach loops [1] if i don't determine , we talk the value
    echo "<ul>";
    foreach($skills as $value){
        echo "<li> this skills $value  </li>";
    }
    echo "</ul>";

    // use array withe foreach loops [2] 
    echo "<ul>";
    foreach($skills as $key => $value){
        echo "<li> the progress in $value is $key  </li>";
    }
    echo "</ul>";



// ---------------- Multidimensional Arrays ----------------------------

// index array in index array

    $Friends = array(
        array("Anas","Ahmad", "Omar"),
        array("Yamen","Osama",array(
            "1" => "Oli"
        )),
        array("Mohamed","Amjad",
        array("Baker")
        )
    );

    $Friends [3] = "xx";
    $Friends[1][0] = "Anas Omar"; # set variable
    echo $Friends[2][2][0]; # in array that index 1 and element that index 0
    echo $Friends[1][2]["1"]; # associative in index
    echo "<br>";


// associative array in associative array

    $marks = array(

        "Anas" => array(
            80 => "matrix",
            90 => "java",
            70 => "physical"
        ),
        
        "Wesam" => array(
            80 => "matrix",
            90 => "c",
            70 => "physical"

        )
    );
    echo $marks["Wesam"][90];

    echo "<ul>";
    foreach($marks as $key => $value){
        // can add some code
        foreach($value as $k => $v){
            echo "<li> $key => $k => $v </li>";
        }
    }
    echo "</ul>";

// index array in associative array

    $skill = array(
        "60%"   => array("html","Css","media"),
        "50%"   => array("html5","Css3"),
        "70%"   => array("js","es6"),
        "90%"   => array("bootstrap","java")
    );
    echo $skill["60%"][1];

    echo "<ul>";
    foreach($skill as $key => $value){
       foreach($value as $item){
           echo "<li> $key ==> $item  </li>";
       }
    }
    echo "</ul>";