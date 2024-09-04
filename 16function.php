<?php

echo "welcome to php function <br><br>";

function processmarks($marksarr){
    $sum=0;
    foreach ($marksarr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgmarks($marksarr){
    $sum=0;
    $i=1;
    foreach ($marksarr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$vivek = [78,89,88,87,99];
$summarkvivek = processmarks($vivek);

echo "total marks scord by rohan out of 500 is $summarkvivek <br>";

// student marks avg find out


$vivek = [79,89,88,87,99];
$avgmarkdip = avgmarks($vivek);

echo "total marks scord by rohan out of 500 is $avgmarkdip <br>";


?>