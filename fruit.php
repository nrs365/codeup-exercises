<?php

// fruit.php - extra practice - create an array of fruits; 
// write a loop that prints the fruits; as a for loop and a foreach loop
// comment out and cont - modify fruit array so that you have fruitname=>color;
// three or more fruit; print usings foreach loop "Apples are red."

$fruits = ["strawberry" => "ichigo", "peach" => "momo", "plum" => "ume"];
foreach ($fruits as $key => $value){
	echo $value . PHP_EOL;
}
