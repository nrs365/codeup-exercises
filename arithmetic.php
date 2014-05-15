<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
		echo $a + $b;
	} else {
		echo "ERROR: both $a and $b should be numbers";
	}
	echo PHP_EOL;

}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
		echo $a - $b;
	} else {
		echo "ERROR: both $a and $b should be numbers";
	}
	echo PHP_EOL;
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
		echo $a * $b;
	} else {
		echo "ERROR: both $a and $b should be numbers";
	}
	echo PHP_EOL;
}

function divide($a, $b) {
	if ($b == 0){
		echo "You cannot divide by zero\n";
	}
	if (is_numeric($a) && is_numeric($b)) {
		echo $a / $b;
	} else {
		echo "ERROR: both $a and $b should be numbers";
	}
	echo PHP_EOL;
}

function remainder($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
		echo $a % $b;
	} else {
		echo "ERROR: both $a and $b should be numbers";
	}
	echo PHP_EOL;
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

add ("cat", 100);
subtract('sleepy', 50);
multiply(10, 10);
divide(100, 0);
remainder(5,2)
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
// adder("2+3", 3);//eror
?>