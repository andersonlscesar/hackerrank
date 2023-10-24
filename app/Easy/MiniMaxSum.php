<?php
namespace App\Easy;

class MiniMaxSum 
{
    public static function miniMaxSum( array $arr ): void
    {
        $lower = 0;
        $max = 0;
        $sumLower = 0;
        $sumMax = 0;

        foreach ( $arr as $value ) {
            if ( $value >= $max ) $max = $value;
            $lower = $max;            
        }

        foreach ( $arr as $value ) {
            if ( $value <= $lower ) $lower = $value;
        }

        foreach ( $arr as $value ) { 
            if ( $value !== $max ) $sumLower += $value;
            if ( $value !== $lower ) $sumMax += $value;
        }
        
        print "$sumLower $sumMax";
    }
}

MiniMaxSum::miniMaxSum([1, 3, 5, 7, 9]);