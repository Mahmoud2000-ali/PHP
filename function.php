<?php

/*

    Syntax

    function nameFunction( arg1, arg2 ){
        statement;
    }

    nameFunction();  $ call function;

    we can write NAMEfuNcTiOn() and nameFunction()

    if i don't sent tow arg i can use default arg

    there function in php _> rand(1,100) that will return number betwen 1 and 100

    function test(int $x, int $y) : int {
        return $x + $y;

    } her we must call 
    [ test(1,4) ] must integers

    
    
    
    function test2( float $x, int $y) : int {

        return (int)($x + $y);
    } her we must call 
    [ test(1,4.5) ] must integers not test2(2.2,4);


*/


    function sayHello(){
        
        for( $i = 0; $i <= 30; ++$i ){
            echo $i;
        }

    echo "<br>";
    echo "<br>";   
    }
  //  sayHello();


    $name = "Ahmad";
    function welcome( $something , $anothersomething){

        echo " Welcome $something and $anothersomething <br> <br>";
        

    }
   // welcome( $name , "Anas" );


    $nameCustomer = "Mohamed";
    $salaryInDay = 90;
    function calcSalary( $nameCustomer, $salaryInDay ){

        $salaryMounth = $salaryInDay * 30;
        echo " Hi $nameCustomer " . " Your Salary in Day is $salaryInDay " . 
        "and Your Salary in mounth is $salaryMounth <br> <br>";

    }
  //  calcSalary($nameCustomer,$salaryInDay);



    function countYear($start, $end){

       echo "<select name = 'year'>";

       for($year = $start; $year <= $end; ++$year)
       {
         echo "<option value='$year'> $year </option>";
        }
    
    }
  //  countYear(100,200);

  function calcAge($name, $age){

        $yourAge = $age * 356;
        return " <h1> Hi $name Your Age In Day is $yourAge </h1> ";
  }

 // $result = calcAge("Anas", 20);
 

    function test( $name, $skills = "Unknown"){

        $result = "<h1> Hi $name Your skills is $skills </h1>";
        return $result;

    }
    
   // $result = test($nameCustomer);
   // echo $result;


    $age = 30;
    function getTicket($age, $name = "Unknown"){

        $numberTicket = rand(1,1000000);
        if($age >= 30){
            $msg    =  "<h3> Hi $name Your age is $age </h3>" . "<br>";
            $msg    .= " <p>You are Qualified To Get Ticket </p>" . "<br>";
            $msg    .= " <span> Number Ticket Is " . $numberTicket . "</span>";
        }else{
            $msg    =  "<h3> Hi $name Your age is $age </h3>" . "<br>";
            $msg    .= " You are Not Qualified To Get Ticket " . "<br>";
        }
        return $msg;
        
    }
   $ticket =  getTicket($age);

   
   function makeFrame($ticket){

    return "<div class = 'nice-frame'>  $ticket  </div>";

   }
   
   $frame = makeFrame($ticket);
   
   ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .nice-frame {
        padding: 10px;
        font-family: arial;
        background-color: #333;
        color: #999;
        text-align: center;
        margin-left: 50%;
        width: 400px;
    }
    .nice-frame span{
        color:red
    }
    </style>
</head>

<body>

    <?php
        echo  $frame;
    ?>

</body>

</html>