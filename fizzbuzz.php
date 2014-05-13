<?php


for ($a = 1; $a <= 100; $a++) 
{	if (($a % 3 == 0) && ($a % 5 == 0)){
		echo "FizzBuzz\n";
	}else if ($a % 5 == 0){
		echo "Buzz\n";
	} else if ($a % 3 == 0){
		echo "Fizz\n";
	} else {
		echo "$a\n";
	}
}
