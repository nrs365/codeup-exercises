<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function check($a){
	if (isset($a)) {
		return " is SET\n";
	} else if (empty($a)) {
		return " is EMPTY\n";
	}
}
unset($nothing);
// TEST: If var $nothing is set, display '$nothing is SET'
echo '$nothing' . check($nothing);
// TEST: If var $nothing is empty, display '$nothing is EMPTY'
echo '$nothing' . check($nothing);
// TEST: If var $something is set, display '$something is SET'
echo '$something' . check($something);
// Serialize the array $array, and output the results
$serial = serialize($array);
echo '$array is ' . $serial . PHP_EOL;
// Unserialize the array $array, and output the results
$unserialized_array = unserialize($serial);
print_r($unserialized_array);