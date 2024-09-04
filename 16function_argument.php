<?php

//function argumrnt 
/*
1) call by value
2) call by reference
3) Default argument value
4) variable length argument
*/

// 1) call by value
echo "call by value pass kare <br>"; 
function vivek($name){
    $name="hii i am vivek";
}
$str ="hii vivek";
vivek($str);

echo "$str <br>";


// 2) call by reference
echo "call by reference te tenu address pass kare <br>";
function vasu(&$name){
    $name="i am vasu";
}
$vasu="hii vasu";
vasu($vasu);

echo "$vasu <br>";


// 3) Default argument values
echo "Default argument value function use <br>";
function jay($name = "vivek"){
    echo "hello $name <br>";
}
jay ("manish");
jay();
jay("vasu");


// 4) variable lenght argument
echo "function ni andar argument nakhavani hoi tyare use thai<br>";
function add(...$nums){
    $sum=0;
    foreach ($nums as $n) {
        $sum +=$n;
    }
    return $sum;
}
echo add(1,2,3,4,5);

?>