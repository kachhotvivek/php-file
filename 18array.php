<?php

echo "normul array in php <br>";
$age = array("virat"=>"35", "vivek"=>"25", "vasu"=>"24");

echo "virat is ". $age['virat']. " year old <br>";
echo "vivek is ". $age['vivek']. " year old <br>";
echo "vasu is ". $age['vasu']. " year old <br>";

// There are three different kinds of arrays.
/*
1)  Numeric Array
2) Associative Array
3) Multidimensional Arrays
*/

// 1) numeric array
echo "<br>1) Numeric aaray <br>";
$student = array("vasu","vivek","manish","jay");
echo "student name are " .$student[1]. " , ".$student[3]. " , ".$student[0]. " , ".$student[2];
echo "<br>";

// 2) Associative Array
echo "<br> 2) Associative array<br>";
$age = array("raj"=>"50","vivek"=>"20","kuldip"=>"25");

 echo "kuldip is ". $age['kuldip']. " year old";
foreach ($age as $key => $value) {
    // echo "<br> $key age is  $value";
    if($value < 30){
        echo "<br>$key age undr for 30";
    }
    else{
        echo "<br>$key age uper for 30";
    }
}
echo "<br>";

// 3) multidimension array
echo "<br>normal multidimension array<br>";
$cars = array(
    array("volvo",22,23),
    array("marsidis",55,46),
    array("odi",45,88),
    array("masteng",55,67)
);
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";

echo "<br>use to for loop<br>";
for ($row = 0; $row < 4; $row++) {
    echo "Row number $row";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }

?>