<?php

// $array = ["alpha", "beta", "charlie"];

// foreach ($array as $value){
// 	echo $value . PHP_EOL;
// 	for ($i = 0; $i <= 100; $i++) {
//     	echo $i . "\n";
//     	if ($i % 3 == 0) {
//         	break; // break 2 tells it to break out two times (the for and the foreach)
//     	}
//     echo "^This is an odd number\n";
// 	}
// }	
// echo "done!\n";

// Create a for loop that shows all even numbers between 1 and 100 using continue.

// Create another for loop that counts from 1 to 100, but stops after 10 using break.

for ($i = 1; $i <= 100; $i++){
	if($i % 2 == 1){ // has to be with a remainder of one b/c it'll sort odd; if remainder is 0 then it'll continue through without echoing anything out;
		continue;
	} echo $i . PHP_EOL;
}

