<?php

// ============   Arithmetic operators   =========================== 

/*
    
    ** [ + ] To addition tow number or more

    ** [ - ] To Subtraction tow number or more
    
    ** [ * ] To Multiplication tow number or more

    ** [ / ] To Division tow number or more

    ** [ % ] To Modulus tow number or more

    ** [ ** ] To Exponentiation tow number or more
    
*/
    
    echo "<h1>addition</h1>";
    $var1 = 100;
    $var2 = 200; # we can creat var3 and put the result 
    echo $var1 + $var2;
    echo "<br>";
    $sum = 0;
    $sum +=100; # To increase the value _> sum = sum * 100;
    echo $sum;
    echo "<br>";

    echo "<h1>Subtraction</h1>";
    $num1 = 100;
    $num2 = 200;
    $num3 = $num1 - $num2;
    echo $num3;
    echo "<br>";
    $sum1 = 100;
    $sum1 -= 50;
    echo $sum1;
    echo "<br>";

    echo "<h1>Multiplication</h1>";
    $num1 = 5;
    $num2 = 10;
    $num3 = $num1 * $num2;
    echo $num3;
    echo "<br>";
    $sum = 10;
    $sum *=5;  # sum = sum * 10;
    echo $sum;
    echo "<br>";

    echo "<h1>Division</h1>";
    $num1 = 5;
    $num2 = 10;
    $num3 = $num1 / $num2; # will return 2.5 not 2 as java
    echo $num3;
    echo "<br>";
    $sum = 10;
    $sum /=5.0;  # sum = sum / 10;
    echo $sum;
    echo "<br>";

    echo "<h1>Modulus</h1>";
    $num1 = 5;
    $num2 = 10;
    $num3 = $num1 % $num2; 
    echo $num3;
    echo "<br>";
    $sum = 10;
    $sum %=5.0;  # sum = sum % 10;
    echo $sum;
    echo "<br>";

    echo "<h1>Exponentiation</h1>";
    $num1 = 2;
    $num2 = 4;
    $num3 = $num1 ** $num2; 
    echo $num3;
    echo "<br>";
    $sum = 2;
    $sum **=4.0;  # sum = sum ** 10;
    echo $sum;
    echo "<br>";



// ============   Assignment operators   ===========================

/*

    ** [ = ] The left operand gets set to the value of the expression on the right	

    ** [ += ] Addition

    ** [ -= ] Subtraction

    ** [ *= ] Multiplication

    ** [ /= ] Multiplication

    ** [ %= ] Modulus

*/

    $var = "Anas";
    $var .= 5; # To Contact Strings withe number
    echo $var; 
    echo "<br>";


// ============   Comparison  operators   ===========================

/*

    ** [ == ] Equals _> return TRUE or FALSE 

    ** [ === ] Identical, Returns true if $x is equal to $y, and they are of the same type

    ** [ != ] Not equal

    ** [ <> ] Not equal, the same thing !=

    ** [ !== ] Not identical, Returns true if $x is not equal to $y, or they are not of the same type

    ** [ < ] less than, return true or false

    ** [ <= ] less than or equals, return true or false

    ** [ > ] big than, return true or false

    ** [ >= ] big than or equals, return true or false
*/

    echo "<h1>Comparison</h1>";
    $number1 = 200;
    $number2 = "200";
    if( $number1 == $number2 ){
        echo "yes";
    }else{
        echo "false";
    }
    
    
    $num1 = 5; # Integer
    $num2 = "5"; # String
    echo "<br>";    
    # if we say num1 == num2 the result is true
    # if we say num1 === num2 the result is false, bucace the data is not same   
    if( $num1 === $num2 ){
        echo "yes";
    }else{
        echo "false";
    }
    echo "<br>";


    $number1 = 200;
    $number2 = "200"; # the same thing [==]
    if( $number1 != $number2 ){
        echo "yes";
    }else{
        echo "false";
    }

    
    $num1 = 5; # Integer
    $num2 = "5"; # String
    echo "<br>";    
    # if we say num1 != num2 the result is true
    # if we say num1 !== num2 the result is false, bucace the data is not same   
    if( $num1 !== $num2 ){
        echo $num1 . " is " . gettype($num1) . "<br>"  . $num2 . " is " . gettype($num2);
    }else{
        echo "false";
    }
    echo "<br>";


    $number1 = 200;
    $number2 = "200"; # the same thing [!=]
    if( $number1 <> $number2 ){
        echo "yes";
    }else{
        echo "false";
    }


// ============   Comparison  operators   ===========================
    
/*

    ** [ ++$x ], Pre-increment _> Increments $x by one, then returns $x

    ** [ $x++ ], Post-increment _> Returns $x, then increments $x by one

    ** [ --$x ], Pre-decrement _> Decrements $x by one, then returns $x

    ** [ $x-- ], Post-decrement _> Returns $x, then decrements $x by one

*/    

    echo "<br>";
    echo "<h1>Increment / Decrement</h1>";
    $x1 = 10;
    echo $x1++ . "<br>";
    echo $x1++ . "<br>";
    echo $x1++ . "<br>";
    echo $x1++ . "<br>";

    $x2 = 10;
    echo ++$x2 . "<br>";
    echo ++$x2 . "<br>";
    echo ++$x2 . "<br>";
    echo ++$x2 . "<br>";

    $x1 = 10;
    echo $x1-- . "<br>";
    echo $x1-- . "<br>";
    echo $x1-- . "<br>";
    echo $x1-- . "<br>";

    $x2 = 10;
    echo --$x2 . "<br>";
    echo --$x2 . "<br>";
    echo --$x2 . "<br>";
    echo --$x2 . "<br>";


// ============   Logical  operators   ===========================

/* 

    ** [ and ], [ && ] , $x and $y  _>  True if both $x and $y are true, True if both $x && $y are true

    ** [ or ], [ || ], $x or $y   _>  True if either $x or $y is true, but we use ||

    ** [ xor ], [ ^ ], $x xor $y  _>  True if either $x or $y is true, but not both

    ** [ ! ], !$x  _>  True if $x is not true


*/

    echo "<h1>Logical</h1>";  
    $number1 = 100;
    $number2 = 50;
    $result = 70;
    if( $result >= $number2 && $result <= $number1 && $result == 80)
    echo " yes ";
    elseif($result >= $number2 && $result <= $number1 || $result == 80)
    echo " accept ";

    
    echo "<br>";
    $number1 = 100;
    $number2 = 50;
    $result = 70;
    if( $result >= $number2 || $result <= $number1 || $result == 80)
    echo " yes ";
    elseif($result >= $number2 && $result <= $number1 || $result == 80)
    echo " accept ";

    
    echo "<br>";
    $x = true;
    $y = false;
    if($x ^ $y){
        echo " yep ";
    }
    echo "<br>";



// ============   Control error operators   ===========================


    # we can use [ @ ] if Ther was error and to do cosmaize error we use [ or die("error ") ] 

    $file = @fopen("anaas.txt","r") or die("This is error");
