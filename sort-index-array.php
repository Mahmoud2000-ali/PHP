<?php


$numbers = array(6,8,"v","3",4,1,"0","7","a");

function sortArray($arrays){
    
    for( $i = 0; $i < count($arrays); $i++){
        for( $j = $i + 1 ; $j < count($arrays); $j++){
            if( $arrays[$i] > $arrays[$j] ){
                $temp = $arrays[$i];
                $arrays[$i] = $arrays[$j];
                $arrays[$j] = $temp;
            }
        }
    }
        return $arrays;
}

    $result =  sortArray($numbers);
   
    foreach($result as $res){
        echo $res;
    }


// =========== sort the array ==============================

# to sort your array => sort(ArrayName,SORT_REGULAR) => sort String then number

# to sorting the number as string => sort(myArray,SORT_STRING) sort number then string

# note the number Smoll that string

    $langs = array("egg","b",20,"c","d",5);
   sort($langs,SORT_STRING);
    echo "<pre>";
    print_r($langs);
    echo "</pre>";


// =========== rsort the array ==============================

# same the sort bur revision
    
    $test = array(2,6,7,5,3);    
    rsort($test);
    echo "<pre>";
    print_r($test);
    echo "</pre>";

    $test2 = array("a","b",7,"c",3);    
    rsort($test,SORT_STRING);
    echo "<pre>";
    print_r($test2);
    echo "</pre>";

