<?php

$hand = array('A-H', '5-D', 'K-C', 'A-S', '4-H');

function getTotal($hand)
{
    $total = 0;

    // loop through hand and calculate total value
    // use "explode" function to separate card suit and value
    // aces count as 11 unless you are over 21 and then they count as 1
    // K, Q, and J count as 10
    // numeric cards count as their value

    $number_of_aces = 0; 

    foreach ($hand as $card)
    {
        $theCard = explode('-', $card); 
        
        //$theCard = str_split($card); 

        switch($theCard[0]) { 
            case '1':
            case 'K':
            case 'Q':
            case 'J':
                $total += 10; 
                break; 
            case 'A': 
                $total += 11; 
                $number_of_aces++;    
                break;
            default:
                $total += $theCard[0];
                break; 
        }
    } 
    
    while ($total > 21 && $number_of_aces > 0){
        $number_of_aces -= 1;
        $total -= 10; 
    } 
    return $total; 
}

echo getTotal($hand) . PHP_EOL;