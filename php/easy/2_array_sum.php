<?php

$numbers = [5, 5, 5, 5];

/**
 * 
 */

function array_simple_sum( array $array ) {
    $sum = 0;
    for ( $i = 0; $i < count( $array ); $i++) {
        $sum += $array[$i];
    }
    return $sum;
}


$result = array_simple_sum( $numbers );
echo $result; // 20

$result2 = array_sum( $numbers );

echo $result2; // 20