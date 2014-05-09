<?php

$a = 10;
$b = '10';

if ($a === $b) {
    echo "$a is identical to $b";
} elseif ($a == $b) {
    echo "$a is equal to $b";
} else {
    echo "$a is not equal to $b";
}
//adding testing