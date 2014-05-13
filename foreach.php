<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $thing) {
    if (is_int($thing)) {
        echo "{$thing} is an integer.\n";
    } else if (is_string($thing)) {
        echo "{$thing} is a string.\n";
    } else if (is_float($thing)){
    	echo "{$thing} is a float.\n";
    } else if (is_bool($thing)){
    	echo "{$thing} is boolean.\n";
    } else if (is_array($thing)){
    	echo "{$thing} is an array.\n";
    } else if (is_null($thing)){
    	echo "{$thing} is NULL.\n";
    }
}