<?php

fwrite(STDOUT, "Please input two numbers for range ");
if(!is_numeric($argv[1]) || !is_numeric($argv[2])){
	fwrite(STDOUT, "Please input numbers only ");
}

if ($argc == 3){
	$min = $argv[1];
	$max = $argv[2];
}
for ($i = $min; $i <= $max; $i++) {
	echo "$i\n";
}