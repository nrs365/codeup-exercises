<?php
// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');
// $day_of_week = 5; // useful to test instead of relying on default timezone set

switch($day_of_week) {
    case 1:
        // Output Monday
        echo "Monday\n";
        break;
    case 2:
        // Output Tuesday
        echo "Tuesday\n";
        break;
    // etc through day 7
    case 3:
        echo "Wednesday\n";
        break;
    case 4:
        echo "Thursday\n";
        break;
    case 5:
        echo "Friday\n";
        break;
    case 6:
        echo "Saturday\n";
        break;
    case 7:
        echo "Sunday\n";
        break;

}