<?php

function numeric_check($a, $b, $dividing = false){
	if (is_numeric($a) && is_numeric($b)){
		if($b === 0 && $dividing){
			echo "You cannot divide by zero\n";
			return false;
		}
		return true;
	} else {
		echo "Error! Both {$a} and {$b} was not a number\n";// must use echo to stay in the function
		return false;
	}
}


function add($a, $b) {
	if (numeric_check($a, $b))
	{
		return $a + $b . PHP_EOL;
	}
	//echo PHP_EOL;
}

function subtract($a, $b) {
	if (numeric_check($a, $b)){
		return $a - $b . PHP_EOL;
	}
}

function multiply($a, $b) {
	if (numeric_check($a, $b)){
		return $a * $b . PHP_EOL;
	}
}

function divide($a, $b) {
	if (numeric_check($a, $b, true)){
		return $a / $b . PHP_EOL;
	}
}

function remainder($a, $b) {
	numeric_check($a, $b);
	return $a % $b . PHP_EOL;
}

// function compare($a, $b, $strict = true) { //$a mixed, $b mixed, $strict bool, set to default $strict = true)
// 	//echo $a == $b ? "true" : "false";
// 	//echo PHP_EOL;
// 	if($strict === true) {
// 		echo $a === $b ? 'true' : 'false';//strong comparison
// 	} else {
// 		echo $a == $b ? 'true' : 'false'; //weak comparison
// 	}
// 	echo PHP_EOL;
// }

echo add (365, 3);
echo subtract(10, 50);
echo multiply(10, 10);
echo divide(100, 0);

// remainder(5,2)
//compare(42, '42', true)

// function inspect($variable = null, $dump = true){
// 	if ($dump === true){
// 		var_dump($variable);
// 	} else {
// 		print_r($variable);
// 	}
// }
// //$heroes = ['batman', 'superman', 'fall out boy'];
// //inspect($heroes);
// inspect(['batman', 'superman', 'fall out boy']);

// function adder($a, $b){
// 	if (is_numeric($a) && is_numeric($b)){
// 		echo $a + $b;
// 	} else {
// 		echo 'ERROR: both $a and $b should be numbers';
// 	}
// 	echo PHP_EOL;
// }
// adder(1, adder(1,2));
// adder(pi(), pi())
// adder (pi(), false);

?>