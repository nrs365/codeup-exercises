<?php

function array_has_value($query, $names) {
	$name = array_search($query, $names);
	if ($name === false) {
		return false;
	} else {
			return true;
	
	}
}	

function array_common_count($array1, $array2) {
	$names_in_common = 0;
	foreach($array1 as $value) {
		if (array_has_value($value, $array2) === true) {
			$names_in_common++;
		}
	}
	return $names_in_common;
}

//$query = 'Tina';
//$query = 'Bob';

$names = ['Dana', 'Mike', 'Amy', 'Adam', 'Tina'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//var_dump(array_has_value($query, $names));
var_dump(array_common_count($names, $compare));