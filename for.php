<?php
function is_input_numeric($input){
	while(!is_numeric($input)){
		fwrite(STDOUT, "Please input only numbers\n");
		$input = (trim(fgets(STDIN)));
	}
	return $input; // this sets the variable when it exits the loop
}

fwrite(STDOUT, "Please input a number for beginning range ");
$min = trim(fgets(STDIN));
$min = is_input_numeric($min);

fwrite(STDOUT, "Please input a number for a maximum range ");
$max = trim(fgets(STDIN));
$max = is_input_numeric($max);

fwrite(STDOUT, "Please input a number for an increment ");
$increment = trim(fgets(STDIN));
	if (empty($increment)){
		$increment = 1;
	} else {
		is_input_numeric($increment);
	}
	
for ($i = $min; $i <= $max; $i += $increment) {
	echo "$i\n";
}

