<?php

/* PHP data types
1. String
2. Integer
3. Float
4. Boolean
5. object
6. Array
7. Null
*/

//  1) String = sequence of charecters
$name = "vivek";
$friend = "vasu";
echo "$name ka friend is $friend ";
echo "<br>";

// 2) Integer = Non decimal number
$income = 7000;
$detst = -9000;
echo "he is income $income ";
echo "<br>";
echo "he is detst $detst";
echo "<br>";

// 3) Float = decimal point number
$income = 700.65;
$detst = 90.89;
echo "he is income $income";
echo "<br>";
echo "he is detst $detst";
echo "<br>";

// 4) boolean = can be either true or false
$x = true;
$is_friend = false;
echo $x;
echo "<br>";
echo $is_friend;
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

// 5)Object - Instances of classes
// Employe is class -----> vivek can be one object
// 6) Array - usedd to store multiple value in a singale variable

$friend = array("vivek", "kuldeep","dip");
echo "<pre>";
echo var_dump($friend);
echo "<br>"; 

echo "<pre>";
echo print_r($friend);
echo "</pre>";



?>