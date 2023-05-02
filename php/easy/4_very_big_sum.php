<?php 

/**
 * In this challenge, you are required to calculate and print the sum of the elements in an array, keeping in mind that some of those integers may be quite large.
 */

 $big_numbers = [ 1000000001, 1000000002, 1000000003, 1000000004, 1000000005 ];

 function big_sum( $a )
 {
    $sum = 0;
    for ( $i = 0; $i < count( $a ); $i++ ) {
        $sum += $a[$i];
    }

    return $sum;
 }

 $res = big_sum( $big_numbers );
 print $res; // 5000000015 

 // Another alternative

 $res2 = array_sum( $big_numbers );
 print $res2; // 5000000015