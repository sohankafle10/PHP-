<?php
//php functions
//normal function

function my_function(){
    echo "Hello, World!";
}

//function with parameters
function add($a, $b){
    return $a + $b;
}

//function with return value
function multiply($a, $b){
    return $a * $b;
}

//function with default value
function greet($name = "World"){
    echo "Hello, $name!";
    }

    //calling functions
my_function();
echo add(2,3);
// echo $result;
//echo multiply(2, 3);
greet();



// create a function that calculates the square of given number as parameter.
function square($a)
{
    return $a * $a;
}
echo square(2);

// create a function that calculates the squareroot of given number as parameter
//create a function that calculates the factorial of given number as parameter

function findsquareroot($a){
    return sqrt($a);
}



function factorial($a){
    $fact = 1;
    for($i = 1; $i <= $a; $i++){
        $fact = $fact * $i;
    }
    return $fact;
}
?>