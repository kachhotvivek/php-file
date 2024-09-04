<?php
// PHP conditional statements
/*
1) if statement
2) if-else statement
3) if-elseif-else statement
4) switch statement
*/


// 1) if statement
$a = "110";
if($a>100){
    echo "a is greter than 100";
    echo "<br>";
}

// 2) if-else statement
$b = "10";
if($b>100){
    echo "b is greater than 100";
    echo "<br>";
}
else{
    echo "b is less than 100";
    echo "<br>";
}

// 3) if-elseif-else satatement
$x = "23";

if($x>23){
    echo "x is greater than 23";
    echo "<br>";
}
elseif($x<23){
    echo "x is less than 23";
    echo "<br>";
}
else{
    echo "x is equles to 23";
    echo "<br>";
}

// 4) switch statement

$i = "2";
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
       echo "i is not equal to 0, 1 or 2";
}


?>