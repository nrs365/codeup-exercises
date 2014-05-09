<?php

$a = 10;
$b = 20;
$c = 'ten';

// add an else clause to the next two statements
if ($a < $b) {
    // output the appropriate result
    echo "$a is less than $b\n";
}
else {
    echo "$a is greater than $b\n";
}

if ($b > $a) {
    // output the appropriate result
    echo "$b is greater than $a\n";
} else {
    echo "$be is less than $a\n";
}

// Shorten the next 2 statements into an if/else
if ($b >= $c) {
    // output the appropriate result
    echo "$b is greater than or equal to $c\n";
} else {
    echo "$b is less than or equal to $c\n";
}

// if ($b <= $c) {
//     // output the appropriate result
//     echo "$b is ____ $c\n";
// }

// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b == $c) {
    // output the appropriate result
    echo "$b is equal to $c\n";
    }   
    else if ($b === $c) {
    echo "$b is identical to $c\n";
    }
    else if ($b != $c) {
    // output the appropriate result
        echo "$b is not equal to $c\n";
    }

    else if ($b !== $c) {
    // output the appropriate result
    echo "$b is not identical to $c\n";
    }

?>