<?php

/*
PHP iterative statements

1) while loop
2) Do-while loop
3) for loop
4) foreach loop

*/

// 1) while loop

echo "<br>show for 10 numbers use for while loop <br>";
$x = 1;
while ($x <= 10) {
    echo "$x";
    echo "<br>";
    $x++;
}

// 2) Do-while loop
echo "<br>show for 10 numbers use for do-while loop <br>";
$x = 1;
do {
    echo "$x";
    echo "<br>";
    $x++;
}while ($x <= 10);

// 3) for loop
echo "<br>show for 10 numbers use for for loop <br>";
$x =1;
for ($x=1; $x <10 ; $x++) { 
    echo "$x";
    echo "<br>";
}

// 4) foreach loop 
echo "<br>welcome to the word of foreach loop <br>";
$arr = array("vivek","dip","manish","kali","varun");

echo "<br>=>foreach rit 1<br>";
for($i=0; $i< count($arr); $i++){
    echo $arr[$i];
    echo "<br>";
}

echo "<br>=>foreach rit 2<br>";
foreach ($arr as $value) {
    echo "$value";
    echo "<br>";
}


?>