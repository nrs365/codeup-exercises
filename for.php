<?php

// fwrite(STDOUT, "Please input two numbers for range and one number as an increment ");
// if(!is_numeric($argv[1]) || !is_numeric($argv[2])|| !is_numeric($argv[3])){
// 	fwrite(STDOUT, "Please input numbers only ");
// }
fwrite(STDOUT, "Please input a number for beginning range ");
$min = fgets(STDIN);

fwrite(STDOUT, "Please input a number for a maximum range ");
$max = fgets(STDIN);

fwrite(STDOUT, "Please input a number for an increment ");
$increment = fgets(STDIN);


// if ($argc == 4){
// 	$min = $argv[1];
// 	$max = $argv[2];
// 	$increment = $argv[3];
// }
for ($i = $min; $i <= $max; $i += $increment) {
	echo "$i\n";
}