<?php 

//string data type
$name="vivek is kachhot";
echo $name;
echo "<br>";

// 1) strlen 
echo strlen($name);
echo "<br>";

// 2) word count
echo str_word_count($name);
echo "<br>";

// 3) string revers
echo strrev($name);
echo "<br>";

// 4) search word and this word find the location
echo strpos($name,"is");
echo "<br>";

// 5) word and anithing replace
echo str_replace("vivek","kuldeep", $name);
echo "<br>";

// 6) multiple time replay
//echo "<pre>";
echo str_repeat($name, 10);
echo "<br> ";

// 7) right spach
echo "<pre>";
echo rtrim("      vivek                                                              ");
echo "</pre>";

// 8) left spach
echo "<pre>";
echo ltrim("                                        vivek     ");
echo "</pre>";


?>