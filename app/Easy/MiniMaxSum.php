<?php
namespace App\Easy;

class MiniMaxSum 
{
    public static function miniMaxSum( array $arr )
    {
        $lower = 0;
        $max = 0;
        $sumLower = 0;
        $sumMax = 0;
        $isSameContentArray = count( array_unique( $arr ) ) === 1;
        
        if ($isSameContentArray) {
            
            for ($i = 0; $i < count($arr); $i++) {
                if ($i >= 1) {
                    $sumMax += $arr[$i];                    
                }    
                
                if ($i < count($arr) - 1 ) {
                    $sumLower += $arr[$i];
                }
            }

        } else {

            foreach ( $arr as $value ) {
                if ( $value > $max ) $max = $value;
                $lower = $max;            
            }
    
            foreach ( $arr as $value ) {
                if ( $value < $lower ) $lower = $value;
            }
    
            foreach ( $arr as $value ) { 
                if ( $value !== $max ) $sumLower += $value;
                if ( $value !== $lower ) $sumMax += $value;
            }
        }

        return "$sumLower $sumMax";
    }
}

// MiniMaxSum::miniMaxSum([1, 3, 5, 7, 9]);


print MiniMaxSum::miniMaxSum([3, 3, 3, 3, 3]);