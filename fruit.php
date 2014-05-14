<?php

// fruit.php - extra practice - create an array of fruits; 
// write a loop that prints the fruits; as a for loop and a foreach loop
// comment out and cont - modify fruit array so that you have fruitname=>color;
// three or more fruit; print usings foreach loop "Apples are red."

$fruits = ["Strawberries" => "red", "Peaches" => "peach", "Plums" => "purple"];

foreach ($fruits as $fruit => $color){
	echo "{$fruit} are {$color}.\n";
}
// $num_of_fruits = count($fruits);

// for($i = 0; $i < $num_of_fruits; $i++){
// 	echo $fruits[$i] . PHP_EOL;
// }

//for($i = 0; $i < count($fruits); $i++){}