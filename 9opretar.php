
<?php
// operators in php 
/*
1) Arithmetic Operators
2) assignment operators
3) comparison operators
4) logical operators
*/

// 1) Arithmetic operator
$x = 48;
$y = 8;

echo "for x + y, the result is ".($x + $y)."<br>";
echo "for x - y, the result is ".($x - $y)."<br>";
echo "for x * y, the result is ".($x * $y)."<br>";
echo "for x / y, the result is ".($x / $y)."<br>";
echo "for x % y, the result is ".($x % $y)."<br>";
echo "for x ** y, the result is ".($x ** $y)."<br><br>";

// 2) assignment operators
$a=50;
$a = 6;
echo "for a, the value is ". $a ."<br>";

$b=50;
$b += 6;
echo "for b, the value is ". $b ."<br>";

$c=50;
$c -= 6;
echo "for c, the value is ". $c ."<br>";

$d=50;
$d *= 6;
echo "for d, the value is ". $d ."<br>";

$e=50;
$e /= 6;
echo "for e, the value is ". $e ."<br>";

$f=50;
$f %= 6;
echo "for f, the value is ". $f ."<br><br>";

//3) comparison operators
//equal
echo "for x==y, the value is ";
echo var_dump($x == $y);
echo  "<br>";

//identical
echo "for x===y, the value is ";
echo var_dump($x === $y);
echo  "<br>";

//not equal
echo "for x!=y, the value is ";
echo var_dump($x != $y);
echo  "<br>";

// not identical
echo "for x !== y, the value is ";
echo var_dump($x !== $y);
echo  "<br>";

// not equal
echo "for x <> y, the value is ";
echo var_dump($x <> $y);
echo  "<br>";

// geater than
echo "for x > y, the value is ";
echo var_dump($x > $y);
echo  "<br>";

// less than
echo "for x < y, the value is ";
echo var_dump($x < $y);
echo  "<br>";

// greater than or equal to
echo "for x >= y, the value is ";
echo var_dump($x >= $y);
echo  "<br>";

// less than or equal to
echo "for x <= y, the value is ";
echo var_dump($x <= $y);
echo  "<br>";

// spaceship
echo "for x <=> y, the value is ";
echo var_dump($x <=> $y);
echo  "<br><br>";


// 4) logical operator
$m = true;
$n = false;

//and 
echo "for m and n, the value is ";
echo var_dump($m and $n);
echo  "<br>";

//and
echo "for m &&(and) n, the value is ";
echo var_dump($m && $n);
echo  "<br>";

//or
echo "for m or n, the value is ";
echo var_dump($m or $n);
echo  "<br>";

//or
echo "for m ||(or) n, the value is ";
echo var_dump($m || $n);
echo  "<br>";

//xor
echo "for m xor n, the value is ";
echo var_dump($m xor $n);
echo  "<br>";

//not
echo "for !n, the value is ";
echo var_dump(!$n);
echo  "<br>";

echo "for !m, the value is ";
echo var_dump(!$m);
echo  "<br>";




?>