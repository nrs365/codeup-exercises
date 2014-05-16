<?php

function numeric_check($a, $b, $dividing = false){
	if (is_numeric($a) && is_numeric($b)){
		if($b === 0 && $dividing){
			echo "You cannot divide by zero\n";
			return false;
		}
		return true;
	} else {
		echo "Error! Both {$a} and {$b} was not a number\n";
		return false;
	}
}

function add($a, $b) {
	if (numeric_check($a, $b))
	{
		return $a + $b . PHP_EOL;
	}
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

echo add(365, 3);
echo subtract(10, 50);
echo multiply(10, 10);
echo divide(100, 0);

?>