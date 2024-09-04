<?php
/*
PHP variable
1. global variable
2. local variable
*/

// 1) global variable
echo "1) global variable<br>";
$x = 10;
$y = 11;
 
function add() {
    echo "addition for two number ";
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
add();
echo $z;


// local variable
echo "<br> 2) local variable<br>";
function vivek(){
    $v=100;
    echo "v number is $v <br>";
}

vivek();

// Example for global and local variable

echo "<br> global & local variable Example";
$a = 120;
$b =100;

function printvalue() {
    global $a,$b; // global variable
    $a = 10; //local variable for global variable value update
    $b = 20;
    echo "<br> the value of variable a is $a and b is $b <br>";
}

echo "<br> the value of viveks a is $a and b is $b <br>";

printvalue();
echo "<br> the value of variable a is $a and b is $b <br>";
?>