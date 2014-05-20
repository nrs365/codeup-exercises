<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($string, $sorting = false) {
  // Your solution goes here!
		$array = explode(', ', $string);
		
		if($sorting){
			sorting_option($array);
		}
			
		$last_item = array_pop($array);
		$new_last_item = 'and '. $last_item;
		array_push($array, $new_last_item);
		$new_string = implode(', ', $array);
		return $new_string;
	
}

function sorting_option($array) {
	return natcasesort($array);
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string, true);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";


//take last item off array, change it to add and, then push it back on the array

//to add to an array $array[] = 'new item';

?>