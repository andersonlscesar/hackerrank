<?php
/**
 Given a square matrix, calculate the absolute difference between the sums of its diagonals.

For example, the square matrix  is shown below:

1 2 3
4 5 6
9 8 9  

Sum of diagonal numbers

 */

 $matrix = [
    [-1, 1, -7, -8],
    [-10, -8, -5, -2],
    [0, 9, 7, -1],
    [4, 4, -2, 1]
 ];

 function diagonal_difference( $arr ) {
    $diagonalA = 0;
    $diagonalB = 0;
    $n = count( $arr );

   for( $i = 0; $i < count( $arr ); $i++ ) {
      $diagonalA += $arr[$i][$i];
      $diagonalB += $arr[$i][$n - $i - 1];
 
   }
   $diff = $diagonalA - $diagonalB;
   return abs($diff);
 }


 $diff = diagonal_difference( $matrix );
print $diff;